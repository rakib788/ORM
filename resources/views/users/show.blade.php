@extends('Layouts.app')
@section('content')
<div class="w-full overflow-hidden rounded-lg shadow-xs">
  <div><a href="{{ route('user.edit', $users->id) }}" class=" bedge add-user  btn btn-primary  float-sm-right">Edit</a></div>
              <div class="w-full overflow-x-auto">
                <table class="w-full whitespace-no-wrap shadow">
                    <tr class=" font-semibold tracking-wide text-left text-gray-500 uppercase border-b dark:border-gray-700 bg-gray-50 dark:text-gray-400 dark:bg-gray-800">
                      <th class="px-4 py-3">Id.</th>
                      <td class="px-4 py-3 text-sm">
                        {{ $users->id }}
                      </td>
                    </tr>
                    <tr class="text-xs font-semibold tracking-wide text-left text-gray-500 uppercase border-b dark:border-gray-700 bg-gray-50 dark:text-gray-400 dark:bg-gray-800">
                        <th class="px-4 py-3">Name</th>
                        <td class="px-4 py-3 text-sm">
                          {{ $users->name }}
                        </td>
                      </tr>
                      <tr class="text-xs font-semibold tracking-wide text-left text-gray-500 uppercase border-b dark:border-gray-700 bg-gray-50 dark:text-gray-400 dark:bg-gray-800">
                        <th class="px-4 py-3">Username</th>
                        <td class="px-4 py-3 text-sm">
                          {{ $users->username }}
                        </td>
                      </tr>
                      <tr class="text-xs font-semibold tracking-wide text-left text-gray-500 uppercase border-b dark:border-gray-700 bg-gray-50 dark:text-gray-400 dark:bg-gray-800">
                        <th class="px-4 py-3">Email</th>
                        <td class="px-4 py-3 text-sm">
                          {{ $users->email }}
                        </td>
                      </tr>
                      <tr class="text-xs font-semibold tracking-wide text-left text-gray-500 uppercase border-b dark:border-gray-700 bg-gray-50 dark:text-gray-400 dark:bg-gray-800">
                        <th class="px-4 py-3">phone Number</th>
                        <td class="px-4 py-3 text-sm">
                          {{ $users->phone }}
                        </td>
                      </tr>
                </table>
              </div>
            </div>
@endsection
