<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('List of User') }}
        </h2>
    </x-slot>
    <div>
    	<table id="myTable" class="rounded-t-lg m-5 w-5/6 mx-auto bg-gray-200 text-gray-800">
    		<tr>
    			<th class="px-4 py-3">NO</th>
    			<th class="px-4 py-3">Name</th>
    			<th class="px-4 py-3">User Login</th>
    			<th class="px-4 py-3">Description</th>
    			<th class="px-4 py-3">Number Of Stars</th>
    			<th class="px-4 py-3">Notes</th>
  			</tr>
  			<tr>
  				<td class="px-4 py-3">{{$datas->id}}</td>
    			<td class="px-4 py-3">{{$datas->full_name}}</td>
    			<td class="px-4 py-3">{{$datas->user_login}}</td>
    			<td class="px-4 py-3">{{$datas->description}}</td>
    			<td class="px-4 py-3">{{$datas->number_of_stars}}</td>
    			<td class="px-4 py-3">{{$datas->notes}}</td>
    		</tr>
    	</table>
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
