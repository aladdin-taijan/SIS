

@extends('managment.layouts.main')
@section('content')

@if (Session::has('warning'))
<div  x-data="{ show: true }" x-show="show" x-init="setTimeout(() => show = false, 3000)" class="text-right bg-red-100 border border-red-400 text-red-700 px-4 py-3 rounded relative" role="alert">
    <span class="block sm:inline text-right">{{ Session::get('warning') }}</span>
   
  </div>
    
@endif
            <div class="-mx-4 sm:-mx-8 px-4 sm:px-8 py-4 overflow-x-auto" dir="rtl">
                <div class="inline-block min-w-full shadow rounded-lg overflow-hidden">
                    <table class="min-w-full leading-normal">
                        <thead>
                            <tr>
                                <th
                                    class="px-5 py-3 border-b-2 border-gray-200 bg-gray-100 text-right text-m font-semibold text-gray-600 uppercase tracking-wider">
                                    اسم الطالب
                                </th>
                                <th
                                    class="px-5 py-3 border-b-2 border-gray-200 bg-gray-100 text-right text-m font-semibold text-gray-600 uppercase tracking-wider">
                                    البرنامج
                                </th>
                                <th
                                    class="px-5 py-3 border-b-2 border-gray-200 bg-gray-100 text-right text-m font-semibold text-gray-600 uppercase tracking-wider">
                                    تاريخ التسجيل
                                </th>
                                <th
                                    class="px-5 py-3 border-b-2 border-gray-200 bg-gray-100 text-right text-m font-semibold text-gray-600 uppercase tracking-wider">
                                    حالة الدفع
                                </th>
                                <th
                                    class="px-5 py-3 border-b-2 border-gray-200 bg-blue-200 text-right text-m font-semibold text-gray-600 uppercase tracking-wider">
                                    العمليات
                                </th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($allstudent as $all)
                                
                            
                            <tr>
                                <td class="px-5 py-5 border-b border-gray-200 bg-white text-m">
                                    <div class="flex items-center">
                                        <div class="flex-shrink-0 w-10 h-10">
                                            <img class="w-full h-full rounded-full"
                                                src="https://images.unsplash.com/photo-1494790108377-be9c29b29330?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=facearea&facepad=2.2&w=160&h=160&q=80"
                                                alt="" />
                                        </div>
                                        <div class="ml-3">
                                            <p class="text-gray-900 whitespace-no-wrap">
                                                &nbsp;  {{ $all->first_name }} &nbsp; {{ $all->last_name }}
                                            </p>
                                        </div>
                                    </div>
                                </td>
                                <td class="px-5 py-5 border-b border-gray-200 bg-white text-m">
                                    <p class="text-gray-900 whitespace-no-wrap">{{ $all->program }}</p>
                                </td>
                                <td class="px-5 py-5 border-b border-gray-200 bg-white text-m">
                                    <p class="text-gray-900 whitespace-no-wrap">
                                        {{ $all->created_at }}
                                    </p>
                                </td>
                                <td class="px-5 py-5 border-b border-gray-200 bg-white text-m">
                                    <span
                                        class="relative inline-block px-3 py-1 font-semibold text-green-900 leading-tight">
                                        
                                            @if ($all->paid == 0 )
                                            <span aria-hidden
                                            class="absolute inset-0 bg-red-200 opacity-50 rounded-full"></span>
                                            <span class="relative">لم يتم الدفع</span>
                                            @else
                                            <span aria-hidden
                                            class="absolute inset-0 bg-green-200 opacity-50 rounded-full"></span>
                                            <span class="relative">تم الدفع</span>
                                            @endif
                                        
                                    </span>
                                </td>
                                
                                <td class=" text-right px-5 py-5 border-b border-gray-200 bg-white text-sm">
                                    <a class="hover:text-blue-500" href="">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" style="display: inline-flex" viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11 5H6a2 2 0 00-2 2v11a2 2 0 002 2h11a2 2 0 002-2v-5m-1.414-9.414a2 2 0 112.828 2.828L11.828 15H9v-2.828l8.586-8.586z" />
                                    </svg>
                                    </a>
                                    <a class="hover:text-blue-500" href="">
                                        <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" style="display: inline-flex" viewBox="0 0 24 24"  stroke="currentColor">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z" />
                                          </svg>
                                    </a>
                                    <a class="hover:text-red-500" href="">
                                        <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" style="display: inline-flex" viewBox="0 0 24 24" stroke="currentColor">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16" />
                                          </svg>
                                        </a>

                                </td>
                            </tr>
                            @endforeach
                            
                            
                        </tbody>
                    </table>
                    <div
                        class="px-5 py-5 bg-white border-t flex flex-col xs:flex-row items-center xs:justify-between          ">
                        <span class="text-xs xs:text-sm text-gray-900">
                            Showing 1 to 4 of 50 Entries
                        </span>
                        <div class="inline-flex mt-2 xs:mt-0">
                            <button
                                class="text-sm bg-gray-300 hover:bg-gray-400 text-gray-800 font-semibold py-2 px-4 rounded-l">
                                Prev
                            </button>
                            <button
                                class="text-sm bg-gray-300 hover:bg-gray-400 text-gray-800 font-semibold py-2 px-4 rounded-r">
                                Next
                            </button>
                        </div>
                    </div>
                </div>
            </div>
@endsection
