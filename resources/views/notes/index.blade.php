 @extends('layouts.base')

@section('content')

            <!--  Main component for call to action 
              -->
              <div class="container">
                <h1 class="pull-xs-left">
                    Notes
                </h1>
                <div class="pull-xs-right">
                    <a class="btn btn-primary" href="{{route('NotesController@createNote'}}" role="button">
                        New Note +
                    </a>
                </div>
                <div class="clearfix">
                </div>
              <!--   ============= notes===========  -->
                 <div class="list-group notes-group">

                    
                         <!-- passing from controller to view  -->
                   @foreach($notes as $note) 
                   <div class="card card-block">
                        <a href="{{route('notes.show',$note->id)}}">
                            <h4 class="card-title">
                                {{$note->title}}
                            </h4>
                        </a>
                        <p class="card-text">
                            {{$note->body}} <!-- data from our db -->
                        </p>
                        <a class="btn btn-sm btn-info pull-xs-left" href="{{action('NotesController@edit',$note->id)}}">
                            Edit
                        </a>
                        <form action="{{action('NotesController@destroy', $note->id )}}" class="pull-xs-right5 card-link" method="POST" style="display:inline">
                            {{method_field('DELETE')}}
                            {{csrf_field()}}
                                <input class="btn btn-sm btn-danger" type="submit" value="Delete"/>
                           
                        </form>
                    </div>   
                     @endforeach                  
                    
                </div>
            </div>  
             </container>
  @endsection