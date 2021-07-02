
@props(['subtitulo'=>' ', 'NuevoBoton'=>'', 'UrlNuevoBoton'=>'#','report'=>''])

<x-alert2 ></x-alert2>

<!-- Main content -->
<section class="content">
      <div class="container-fluid">
        <div class="row">
          <!-- left column -->
          <div class="col-md-12">
            <!-- jquery validation -->
            <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">{{ $titulo }} <small>{{$subtitulo}}</small></h3>
              </div>

              <form id="quickForm">
                <div class="card-body">
                @if ($NuevoBoton)
                <div class="float-right">
                <a class="btn btn-success" href="{{ $UrlNuevoBoton }}" role="button">{{ $NuevoBoton }}</a>
                </div>
                @endif
                    <table class="table table-bordered table-hover" id="{{ $report }}">
                      <thead >
                        <tr>
                          {{ $thead }}
                          <th scope="col" class="relative px-6 py-3">
                            <span class="sr-only"></span>
                          </th>
                        </tr>
                      </thead>
                      <tbody >
                        {{ $tbody }}
                            
                      </tbody>
                    </table>
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>
  </section>
    {{ $links }}
     




