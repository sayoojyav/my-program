<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('List of User') }}
        </h2>
    </x-slot>
    <div>
    	<div class="mt-8 -mx-3 md:flex mb-6">
    		<div class="md:w-full px-3">
    			<input class="appearance-none block w-full bg-grey-lighter text-grey-darker border border-red rounded" id="search" type="text" placeholder="Search" name="search">
    		</div>
    	</div>
    	<table id="myTable" class="rounded-t-lg m-5 w-5/6 mx-auto bg-gray-200 text-gray-800">
    		<tr>
    			<th class="px-4 py-3">NO</th>
    			<th class="px-4 py-3">Name</th>
    			<th class="px-4 py-3">User Login</th>
    			<th class="px-4 py-3">Description</th>
    			<th class="px-4 py-3">Number Of Stars</th>
    			<th class="px-4 py-3">Notes</th>
          <th class="px-4 py-3">Actions</th>
  			</tr>
  			@foreach($datas as $data)
  			<tr>
  				<td class="px-4 py-3">{{$data->id}}</td>
    			<td class="px-4 py-3">{{$data->full_name}}</td>
    			<td class="px-4 py-3">{{$data->user_login}}</td>
    			<td class="px-4 py-3">{{$data->description}}</td>
    			<td class="px-4 py-3">{{$data->number_of_stars}}</td>
    			<td class="px-4 py-3">{{$data->notes}}</td>
          <td class="px-4 py-3">
            <a class="block px-4 py-2 text-sm leading-5 text-gray-700 hover:bg-gray-100 focus:outline-none focus:bg-gray-100 transition duration-150 ease-in-out" href="{{route('data.view',['id'=>$data->id])}}">view</a>
          </td>
    		</tr>
    		@endforeach
    	</table>
    	{{$datas->links()}}
    </div>
</x-app-layout>
<style>
table, td, th {  
  border: 1px solid #ddd;
  text-align: left;
}

table {
  border-collapse: collapse;
  width: 100%;
}

th, td {
  padding: 15px;
}
</style>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script>
$(document).ready(function(){
  $("#search").on("keyup", function() {
    var value = $(this).val().toLowerCase();
    $("#myTable tr").filter(function() {
      $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
    });
  });
});
</script>
