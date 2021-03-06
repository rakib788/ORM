@extends('Layouts.app')
@section('content')
<div class="w-full overflow-hidden rounded-lg shadow-xs">
  <div><a href="{{ route('user_details.create') }}" class="add-user btn btn-primary  float-sm-right">Add Details</a></div>
              <div class="w-full overflow-x-auto">
                <table class="w-full whitespace-no-wrap">
                  <thead>
                    <tr class="text-xs font-semibold tracking-wide text-left text-gray-500 uppercase border-b dark:border-gray-700 bg-gray-50 dark:text-gray-400 dark:bg-gray-800">
                      <th class="px-4 py-3">SL_Id.</th>
                      <th class="px-4 py-3">User id</th>
                      <th class="px-4 py-3">address</th>
                      <th class="px-4 py-3">city</th>
                      <th class="px-4 py-3">location</th>
                      <th class="px-4 py-3">description</th>
                      <th class="px-4 py-3">Action</th>
                    </tr>
                  </thead>
                  @foreach ($user_details as $key=>$row )
                  <tbody class="bg-white divide-y dark:divide-gray-700 dark:bg-gray-800">
                    <tr class="text-gray-700 dark:text-gray-400">
                      <td class="px-4 py-3 text-sm">
                        {{ $row->id }}
                      </td>
                      <td class="px-4 py-3 text-sm">
                        {{ $row->user_id }}
                        </td>
                      <td class="px-4 py-3 text-sm">
                        {{ $row->address }}
                      </td>
                      <td class="px-4 py-3 text-xs">
                        {{ $row->city }}
                      </td>
                      <td class="px-4 py-3 text-sm">
                        {{ $row->location }}
                      </td>
                      <td class="px-4 py-3 text-sm ">
                        <textarea name="" id="" cols="20" rows="2">{{ $row->description }}</textarea>
                      </td>
                      <td class="px-4 py-3 text-sm">
                    <div class="form-group">
                              <a href="{{ route('user_details.show',$row->id) }}" class="badge btn btn-sm btn-primary">Show</a>
                        <form action="{{ route('user_details.destroy', $row->id) }}" method="POST">
                            @csrf
                            <input type="hidden" name="_method" value="DELETE">
                            <button type="submit" class="badge btn btn-sm btn-danger">delete</button>
                        </form>
                    </div>
                      </td>
                    </tr>
                  </tbody>
                  @endforeach
                </table>
              </div>
              <div class="grid px-4 py-3 text-xs font-semibold tracking-wide text-gray-500 uppercase border-t dark:border-gray-700 bg-gray-50 sm:grid-cols-9 dark:text-gray-400 dark:bg-gray-800">
                <span class="flex items-center col-span-3">
                  Showing 21-30 of 100
                </span>
                <span class="col-span-2"></span>
                <!-- Pagination -->
                <span class="flex col-span-4 mt-2 sm:mt-auto sm:justify-end">
                  <nav aria-label="Table navigation">
                    <ul class="inline-flex items-center">
                      <li>
                        <button class="px-3 py-1 rounded-md rounded-l-lg focus:outline-none focus:shadow-outline-purple" aria-label="Previous">
                          <svg aria-hidden="true" class="w-4 h-4 fill-current" viewBox="0 0 20 20">
                            <path d="M12.707 5.293a1 1 0 010 1.414L9.414 10l3.293 3.293a1 1 0 01-1.414 1.414l-4-4a1 1 0 010-1.414l4-4a1 1 0 011.414 0z" clip-rule="evenodd" fill-rule="evenodd"></path>
                          </svg>
                        </button>
                      </li>
                      <li>
                        <button class="px-3 py-1 rounded-md focus:outline-none focus:shadow-outline-purple">
                          1
                        </button>
                      </li>
                      <li>
                        <button class="px-3 py-1 rounded-md focus:outline-none focus:shadow-outline-purple">
                          2
                        </button>
                      </li>
                      <li>
                        <button class="px-3 py-1 text-white transition-colors duration-150 bg-purple-600 border border-r-0 border-purple-600 rounded-md focus:outline-none focus:shadow-outline-purple">
                          3
                        </button>
                      </li>
                      <li>
                        <button class="px-3 py-1 rounded-md focus:outline-none focus:shadow-outline-purple">
                          4
                        </button>
                      </li>

                        <button class="px-3 py-1 rounded-md focus:outline-none focus:shadow-outline-purple">
                          9
                        </button>
                      </li>
                      <li>
                        <button class="px-3 py-1 rounded-md rounded-r-lg focus:outline-none focus:shadow-outline-purple" aria-label="Next">
                          <svg class="w-4 h-4 fill-current" aria-hidden="true" viewBox="0 0 20 20">
                            <path d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z" clip-rule="evenodd" fill-rule="evenodd"></path>
                          </svg>
                        </button>
                      </li>
                    </ul>
                  </nav>
                </span>
              </div>
            </div>
@endsection
