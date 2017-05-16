                                                        @foreach ($users as $user)
                                                            <tr id="{{ $user->id }}">
                                                                <td>{{ $user->id }}</td>
                                                                <td>{{ $user->clinic_history_code }}</td>
                                                                <td>{{ $user->document_identity_code or 'Corregir DNI' }}</td>
                                                                <td><a href="{{ url('/paciente/'.$user->id) }}">{{ $user->name }} {{ $user->paternal }} {{ $user->maternal }}</a></td>
                                                                <td>{{ $user->insureds->insurance->name or 'Particular' }}</td>
                                                                <td>{{ Helpers::get_age($user->birthday) }}</td>
                                                            </tr>
                                                        @endforeach