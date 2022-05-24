@extends('Layouts.app')
@section('content')
<div class="w-full overflow-hidden rounded-lg shadow-xs">
  <div><a href="{{ route('user_details.edit', $user_details->id) }}" class=" bedge add-user  btn btn-primary  float-sm-right">Edit</a></div>
              <div class="w-full overflow-x-auto">
                <table class="w-full whitespace-no-wrap shadow">
                    <tr class=" font-semibold tracking-wide text-left text-gray-500 uppercase border-b dark:border-gray-700 bg-gray-50 dark:text-gray-400 dark:bg-gray-800">
                      <th class="px-4 py-3">Id.</th>
                      <td class="px-4 py-3 text-sm">
                        {{ $user_details->id }}
                      </td>
                    </tr>
                    <tr class="text-xs font-semibold tracking-wide text-left text-gray-500 uppercase border-b dark:border-gray-700 bg-gray-50 dark:text-gray-400 dark:bg-gray-800">
                        <th class="px-4 py-3">User Id</th>
                        <td class="px-4 py-3 text-sm">
                          {{ $user_details->user_id }}
                        </td>
                      </tr>
                      <tr class="text-xs font-semibold tracking-wide text-left text-gray-500 uppercase border-b dark:border-gray-700 bg-gray-50 dark:text-gray-400 dark:bg-gray-800">
                        <th class="px-4 py-3">Address</th>
                        <td class="px-4 py-3 text-sm">
                          {{ $user_details->address }}
                        </td>
                      </tr>
                      <tr class="text-xs font-semibold tracking-wide text-left text-gray-500 uppercase border-b dark:border-gray-700 bg-gray-50 dark:text-gray-400 dark:bg-gray-800">
                        <th class="px-4 py-3">City</th>
                        <td class="px-4 py-3 text-sm">
                          {{ $user_details->city }}
                        </td>
                      </tr>
                      <tr class="text-xs font-semibold tracking-wide text-left text-gray-500 uppercase border-b dark:border-gray-700 bg-gray-50 dark:text-gray-400 dark:bg-gray-800">
                        <th class="px-4 py-3">Location</th>
                        <td class="px-4 py-3 text-sm">
                          {{ $user_details->location }}
                        </td>
                      </tr>
                      <tr class="text-xs font-semibold tracking-wide text-left text-gray-500 uppercase border-b dark:border-gray-700 bg-gray-50 dark:text-gray-400 dark:bg-gray-800">
                        <th class="px-4 py-3">Description</th>
                        <td class="px-4 py-3 text-sm ">
                          <textarea name="" id="" cols="20" rows="2">{{ $user_details->description }}</textarea>
                        </td>
                      </tr>
                </table>
              </div>
            </div>
@endsection
