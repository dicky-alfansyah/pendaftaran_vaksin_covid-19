               
               <table>
                  <thead>
                    <tr>
                    <th style="width: 40px">No</th>
                      <th style="width: 200px">Nomor Registrasi</th>
                      <th style="width: 200px">Nama Lengkap</th>
                      <th style="width: 150px">Dosis Vaksin</th>
                      <th style="width: 100px">Jenis Vaksin</th>
                      <th style="width: 100px">Tanggal Lahir</th>
                      <th style="width: 150px">Nomor HP</th>
                      <th style="width: 400px">Alamat</th>
                    </tr>
                  </thead>
                  <tbody>
                    @foreach ($data_pendaftaran_vaksin as $jv)
                    <tr>
                      <td>{{$loop -> iteration}}</td>
                      <td>NR-AV-00{{$jv->id}}</td>
                      <td>{{$jv->nama_lengkap}}</td>
                      <td>{{$jv->dosis_vaksin}}</td>
                      <td>{{$jv->jenis_vaksin}}</td>
                      <td>{{$jv->tanggal_lahir}}</td>
                      <td>{{$jv->no_hp}}</td>
                      <td>{{$jv->alamat}}</td>
                    </tr>
                    @endforeach
                  </tbody>
                </table>
             