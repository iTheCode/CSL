!function($){"use strict";
	var CalendarApp=function(){
		this.$body=$("body")
		this.$modal=$('#event-modal'),
		this.$event=('#external-events div.external-event'),
		this.$calendar=$('#calendar'),
		this.$saveCategoryBtn=$('.save-category'),
		this.$categoryForm=$('#add-category form'),
		this.$extEvents=$('#external-events'),
		this.$calendarObj=null
	};
	CalendarApp.prototype.onDrop=function(eventObj,date){
		var $this=this;
		var originalEventObject=eventObj.data('eventObject');
		var $categoryClass=eventObj.attr('data-class');
		var copiedEventObject=$.extend({},originalEventObject);
		copiedEventObject.start=date;
		if($categoryClass)copiedEventObject['className']=[$categoryClass];
		$this.$calendar.fullCalendar('renderEvent',copiedEventObject,true);
		if($('#drop-remove').is(':checked')){eventObj.remove();}
	},
	CalendarApp.prototype.onEventClick=function(calEvent,jsEvent,view){
		var $this=this;
		var form=$("<form></form>");
		var explode = calEvent.title.split(" - ");
		form.append("<div class='row'></div>");
		form.find(".row").append("<div class='col-md-6'><div class='form-group'><label class='control-label'>Paciente: </label><input id='search_patient' class='form-control' placeholder='Buscar' type='text' name='title' value='"+explode[0]+"'/></div></div>").append("<div class='col-md-6'><div class='form-group'><label class='control-label'>Médico: </label><input class='form-control' name='doctor' value='"+explode[1]+"'></div></div>").append("<div class='col-md-6'><div class='form-group'><label class='control-label'>Especialidad: </label><input class='form-control' name='category' value='"+ explode[2] +"'></div></div>").append("<div class='col-md-6'><div class='form-group'><label class='control-label'>Celular: </label><input class='form-control' name='phone' maxlength='9' size='9' value='" + explode[3] +"'></div></div>");
		$this.$modal.modal({backdrop:'static'});
		$this.$modal.find('.delete-event').text("Eliminar Cita").show().end().find('.save-event').hide().end().find('.modal-body').empty().prepend(form).end().find('.delete-event').unbind('click').click(function(){
			$this.$calendarObj.fullCalendar('removeEvents',function(ev){return(ev._id==calEvent._id);});
			$this.$modal.modal('hide');});
		$this.$modal.find('form').on('submit',function(){
				calEvent.title=form.find("input[type=text]").val();
				//$this.$calendarObj.fullCalendar('updateEvent',calEvent);
				$this.$modal.modal('hide');return false;});
	},
	CalendarApp.prototype.onSelect=function(start,end,allDay){
		var $this=this;$this.$modal.modal({backdrop:'static'});
		var form=$("<form></form>");
		form.append("<div class='row'></div>");
		form.find(".row").append("<div class='col-md-6'><div class='form-group'><label class='control-label'>Paciente: </label><input id='search_patient' class='form-control' placeholder='Buscar' type='text' name='title'/></div></div>").append("<div class='col-md-6'><div class='form-group'><label class='control-label'>Médico: </label><select class='form-control' name='doctor'></select></div></div>").append("<div class='col-md-6' style=display:none;''><div class='form-group'><label class='control-label'>ID: </label><input class='form-control' name='id'></div></div>").append("<div class='col-md-6'><div class='form-group'><label class='control-label'>Especialidad: </label><select class='form-control' name='category'></select></div></div>").append("<div class='col-md-6'><div class='form-group'><label class='control-label'>Celular: </label><input class='form-control' maxlength='9' size='9' name='phone'></div></div>").find("select[name='category']").append($("#consult").find("select").html());
		form.find("#search_patient").autocomplete({
		    source: function (request, response) {
		        $.getJSON("/getPatientComplete/" + request.term, function (data) {
		            response($.map(data, function (value, key) {
		                return value;
		            }));
		        });
		    },
		    open: function(){
		        $(this).autocomplete('widget').css('z-index', 9999);
		        return false;
		    },
		    select: function (event, ui) {
		    	event.preventDefault();
		        $("#search_patient").val(ui.item.label);
		        $("input[name='id']").val(ui.item.value);
		        $("input[name='phone']").val(ui.item.phone);
		    }
		});
		form.find("select[name='doctor']").append($("#doctors").find("select").html());
		$this.$modal.find('.delete-event').hide().end().find('.save-event').text("Crear Cita").show().end().find('.modal-body').empty().prepend(form).end().find('.save-event').unbind('click').click(function(){form.submit();});$this.$modal.find('form').on('submit',function(){
			var title=form.find("input[name='title']").val()+" - "+form.find("select[name='doctor'] option:selected").text()+" - "+form.find("select[name='category'] option:selected").text()+" - "+form.find("input[name='phone']").val();
			var beginning=form.find("input[name='beginning']").val();
			var ending=form.find("input[name='ending']").val();
			var categoryClass=form.find("select[name='category'] option:checked").val();
				if(title!==null&&title.length!=0){
					// Save the data into db, add job queue for the sms.
                    $.ajax({
                    	url: "{{ url('/createDate/') }}", 
                        method: "GET",
                        data: data,
                        success: function(result){
							$this.$calendarObj.fullCalendar('renderEvent',{title:title,start:start,end:end,allDay:false,className:categoryClass},true);
							$this.$modal.modal('hide');
                        }
                    });


				}else{
					alert('You have to give a title to your event');
				}
			return false;
		});
		$this.$calendarObj.fullCalendar('unselect');},

	CalendarApp.prototype.enableDrag=function(){
			$(this.$event).each(function(){
				var eventObject={title:$.trim($(this).text())};
				$(this).data('eventObject',eventObject);
				$(this).draggable({zIndex:999,revert:true,revertDuration:0});
			});
	}
	 	
	CalendarApp.prototype.init=function(){
		this.enableDrag();
		var date=new Date();
		var d=date.getDate();
		var m=date.getMonth();
		var y=date.getFullYear();
		var form='';
		var today=new Date($.now());
		var defaultEvents=[];
		var $this=this;$this.$calendarObj=$this.$calendar.fullCalendar({
			slotDuration:'00:30:00',
			minTime:'08:00:00',
			locale:'es',
			maxTime:'23:00:00',defaultView:'agendaWeek',
			handleWindowResize:false,
			height:$(window).height()-200,
			header:{left:'prev,next today',center:'title',right:'month,agendaWeek,agendaDay'},
			events:defaultEvents,
			editable:false,
			droppable:true,
			eventLimit:true,
			selectable:true,
			allDaySlot:false,
			drop:function(date){$this.onDrop($(this),date);},
			select:function(start,end,allDay){$this.onSelect(start,end,allDay);},
			eventClick:function(calEvent,jsEvent,view){$this.onEventClick(calEvent,jsEvent,view);},
		});
		this.$saveCategoryBtn.on('click',function(){
			var categoryName=$this.$categoryForm.find("input[name='category-name']").val();
			var categoryColor=$this.$categoryForm.find("select[name='category-color']").val();
			if(categoryName!==null&&categoryName.length!=0){$this.$extEvents.append('<div class="external-event bg-'+categoryColor+'" data-class="bg-'+categoryColor+'" style="position: relative;"><i class="fa fa-move"></i>'+categoryName+'</div>');$this.enableDrag();}
		});
	},
	$.CalendarApp=new CalendarApp,$.CalendarApp.Constructor=CalendarApp}
	(window.jQuery),function($){"use strict";$.CalendarApp.init()}(window.jQuery);






