@extends('layout/backend')

@section('content')



<div class="panel panel-primary">
   <div class="panel-heading">Language Info</div>
   <div class="panel-body">



         {{ Form::open(array('class' => 'form-horizontal', 'role' => 'form')) }}
         <div class="row">             
            <div class="col-md-12">                 





				<div class="form-group">
					<div class="col-md-4">          
						<div class="required">        
						{{ Form::label('selectDialect', 'Language Dialect') }}   
						@if ($errors->has('dialect'))
							<p class="text-danger">{{ $errors->first('dialect') }}</p>
						@endif      
						{{ Form::text('dialect', $detail->dialect, array('class'=>'form-control', 'id' => 'selectDialect', 'size' => 40)) }}                     
						</div>
					</div>
				</div>




				<div class="form-group">
					<div class="col-md-4">          
						<div class="required">        
						{{ Form::label('selectDesc', 'Description') }}   
						@if ($errors->has('desc'))
							<p class="text-danger">{{ $errors->first('desc') }}</p>
						@endif      
						{{ Form::text('desc', $detail->desc, array('class'=>'form-control', 'id' => 'selectDesc', 'size' => 40)) }}                     
						</div>
					</div>
				</div>




				<div class="form-group">
					<div class="col-md-4">          
						<div class="required">        
						{{ Form::label('selectWritten', 'Written') }}   
						@if ($errors->has('written'))
							<p class="text-danger">{{ $errors->first('written') }}</p>
						@endif      
						{{ Form::select('written', $levels, $detail->written, array('class' => 'form-control', 'id' => 'selectWritten')) }}                 
						</div>
					</div>
				</div>




									
				<div class="form-group">
					<div class="col-md-4">          
						<div class="required">        
						{{ Form::label('selectReading', 'Read') }}   
						@if ($errors->has('reading'))
							<p class="text-danger">{{ $errors->first('reading') }}</p>
						@endif      
						{{ Form::select('reading', $levels, $detail->reading, array('class' => 'form-control', 'id' => 'selectReading')) }}                 
						</div>
					</div>
				</div>




				<div class="form-group">
					<div class="col-md-4">          
						<div class="required">        
						{{ Form::label('selectSpoken', 'Spoken') }}   
						@if ($errors->has('spoken'))
							<p class="text-danger">{{ $errors->first('spoken') }}</p>
						@endif      
						{{ Form::select('spoken', $levels, $detail->spoken, array('class' => 'form-control', 'id' => 'selectSpoken')) }}                 
						</div>
					</div>
				</div>




            </div>               
         </div>   


		{{ Form::hidden('id', $i['id']) }}
      	{{ Form::hidden('uid', $i['uid']) }}            
		{{ Form::hidden('key', $i['key']) }}      	
		{{ Form::button('Save&nbsp;<i class="icon-arrow-right"></i>',['type' => 'submit', 'class' => 'btn btn-danger']) }}         
		{{ Form::close() }}  


   </div>      
</div>




@stop