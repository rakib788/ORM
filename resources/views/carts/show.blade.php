@extends('Layouts.app')
@section('content')
<div class=" overflow-hidden rounded-lg shadow-xs">
              <div class="w-full overflow-x-auto">
                <div><a href="{{ route('carts.edit', $carts->id) }}" class=" bedge add-user  btn btn-primary  float-sm-right">Edit</a></div>
                <table class="w-full whitespace-no-wrap shadow table-bordered table">
                    <tr class=" font-semibold tracking-wide text-left text-gray-500 uppercase border-b dark:border-gray-700 bg-gray-50 dark:text-gray-400 dark:bg-gray-800">
                      <th class="px-4 py-3">Id.</th>
                      <td class="px-4 py-3 text-sm">
                        {{ $carts->id }}
                      </td>
                    </tr>
                    <tr class="text-xs font-semibold tracking-wide text-left text-gray-500 uppercase border-b dark:border-gray-700 bg-gray-50 dark:text-gray-400 dark:bg-gray-800">
                        <th class="px-4 py-3">User Id</th>
                        <td class="px-4 py-3 text-sm">
                          {{ $carts->user_id }}
                        </td>
                      </tr>
                      <tr class="text-xs font-semibold tracking-wide text-left text-gray-500 uppercase border-b dark:border-gray-700 bg-gray-50 dark:text-gray-400 dark:bg-gray-800">
                        <th class="px-4 py-3">Address</th>
                        <td class="px-4 py-3 text-sm">
                          {{ $carts->product_id }}
                        </td>
                      </tr>
                      <tr class="text-xs font-semibold tracking-wide text-left text-gray-500 uppercase border-b dark:border-gray-700 bg-gray-50 dark:text-gray-400 dark:bg-gray-800">
                        <th class="px-4 py-3">City</th>
                        <td class="px-4 py-3 text-sm">
                          {{ $carts->quantity }}
                        </td>
                      </tr>
                </table>
    </div>
</div>
@endsection
