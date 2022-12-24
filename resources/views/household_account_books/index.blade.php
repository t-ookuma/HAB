@extends('layouts.header_app')
@section('content')

<div class="flex min-h-screen pt-6 pb-6 items-start justify-center bg-gray-200 from-teal-100 via-teal-300 to-teal-500">
    <div class="mx-auto w-full max-w-5xl rounded-lg bg-white px-10 py-8 shadow-xl">

        <!-- tab menu -->
        <div class="flex justify-center items-center">
            <div class="">
                <a href="">
                    <svg class="h-8 w-8 text-right text-gray-800 hover:text-blue-600 rounded-full hover:bg-gray-50 p-1" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                        <polyline points="11 17 6 12 11 7" />
                        <polyline points="18 17 13 12 18 7" />
                    </svg>
                </a>
            </div>
            <div>
                <div class="relative inline-flex pr-6 pl-6 ">
                    <select class="text-center text-lg text-gray-800 hover:text-blue-600 rounded-full hover:bg-gray-50 p-1 focus:outline-none appearance-none">
                        @foreach(\YearConst::YEAR_LIST as $key => $value)
                        <option class=" text-gray-800" value="{{ $key }}">{{ $value }}</option>
                        @endforeach
                    </select>
                </div>
            </div>
            <div>
                <a href="">
                    <svg class="h-8 w-8 text-left text-gray-800 hover:text-blue-600 rounded-full hover:bg-gray-50 p-1" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                        <polyline points="13 17 18 12 13 7" />
                        <polyline points="6 17 11 12 6 7" />
                    </svg>
                </a>
            </div>
        </div>
        <!-- actual component start -->
        <div x-data="setup()">
            <ul class="flex justify-center items-center my-4">
                <template x-for="(tab, index) in tabs" :key="index">
                    <li class="cursor-pointer py-2 px-4 text-gray-600 border-b-8 hover:bg-gray-50" :class="activeTab===index ? 'text-green-600 border-green-600' : ''" @click="activeTab = index" x-text="tab"></li>
                </template>
            </ul>

            <!-- tab 1 -->
            <div class="bg-white mx-auto">
                <div x-show="activeTab===0">
                    <div>
                        <div class="flex justify-center mx-w-lg">
                            <!-- Earning And Expense -->
                            <div class="">
                                <div class="px-5 py-4 border-b border-gray-100">
                                    <div class="flex justify-center font-semibold text-lg text-green-600">収支<span class="pl-2 allura">- Earning And Expense -</span></div>
                                </div>
                                <div class="overflow-x-auto p-3">
                                    <table class="table-auto w-full">
                                        <thead class="uppercase">
                                            <tr>
                                                <th></th>
                                                <th class="p-3 text-xs text-gray-400 bg-gray-50">
                                                    <div class="font-semibold text-center">金額</div>
                                                </th>
                                                <th class="p-3 text-xs text-gray-400 bg-gray-50">
                                                    <div class="font-semibold text-center">前月比</div>
                                                </th>
                                                <th class="p-3 text-xs text-gray-400 bg-gray-50">
                                                    <div class="font-semibold text-center">前年比</div>
                                                </th>
                                            </tr>
                                        </thead>
                                        <tbody class="text-sm divide-y divide-gray-100">
                                            <tr>
                                                <th class="p-3 text-xs text-gray-400 bg-gray-50">
                                                    <div class="font-semibold text-center">収入</div>
                                                </th>
                                                <td class="p-3">
                                                    <div class="font-medium text-right text-gray-800">
                                                        1,000,000
                                                        <span>円</span>
                                                    </div>
                                                </td>
                                                <td class="p-3">
                                                    <div class="font-medium text-right text-gray-800">
                                                        100
                                                        <span>%</span>
                                                    </div>
                                                </td>
                                                <td class="p-3">
                                                    <div class="font-medium text-right text-gray-800">
                                                        100
                                                        <span>%</span>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <th class="p-3 text-xs text-gray-400 bg-gray-50">
                                                    <div class="font-semibold text-center">支出</div>
                                                </th>
                                                <td class="p-3">
                                                    <div class="font-medium text-right text-gray-800">
                                                        1,000,000
                                                        <span>円</span>
                                                    </div>
                                                </td>
                                                <td class="p-3">
                                                    <div class="font-medium text-right text-gray-800">
                                                        100
                                                        <span>%</span>
                                                    </div>
                                                </td>
                                                <td class="p-3">
                                                    <div class="font-medium text-right text-gray-800">
                                                        100
                                                        <span>%</span>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <th class="p-3 text-xs text-gray-400 bg-gray-50">
                                                    <div class="font-semibold text-center">収支</div>
                                                </th>
                                                <td class="p-3">
                                                    <div class="font-medium text-right text-gray-800">
                                                        1,000,000
                                                        <span>円</span>
                                                    </div>
                                                </td>
                                                <td class="p-3">
                                                    <div class="font-medium text-right text-gray-800">
                                                        100
                                                        <span>%</span>
                                                    </div>
                                                </td>
                                                <td class="p-3">
                                                    <div class="font-medium text-right text-gray-800">
                                                        100
                                                        <span>%</span>
                                                    </div>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                                <div class="flex justify-end font-bold space-x-4 text-2xl border-t border-gray-100 px-5 py-4"></div>
                            </div>
                        </div>
                        <div class="flex justify-around">
                            <!-- incomes -->
                            <div class="">
                                <div class="px-5 py-4 border-b border-gray-100">
                                    <div class="flex justify-center font-semibold text-lg text-blue-600">収入<span class="pl-2 allura">- Incomes -</span></div>
                                </div>
                                <div class="overflow-x-auto p-3">
                                    <table class="table-auto w-full">
                                        <thead class="text-xs font-semibold uppercase text-gray-400 bg-gray-50">
                                            <tr>
                                                <th class="p-3">
                                                    <div class="font-semibold text-center">収入項目</div>
                                                </th>
                                                <th class="p-3">
                                                    <div class="font-semibold text-center">収入金額</div>
                                                </th>
                                                <th class="p-3">
                                                    <div class="font-semibold text-center">前月比</div>
                                                </th>
                                                <th class="p-3">
                                                    <div class="font-semibold text-center">前年比</div>
                                                </th>
                                                <th></th>
                                            </tr>
                                        </thead>
                                        <tbody class="text-sm divide-y divide-gray-100">
                                            @foreach (\SampleConst::INCOME_LIST as $value)
                                            <tr class="hover:bg-gray-50">
                                                <td class="p-3">
                                                    <div class="font-medium text-gray-800">{{ $value }}</div>
                                                </td>
                                                <td class="p-3">
                                                    <div class="font-medium text-gray-800">100,000<span>円</span></div>
                                                </td>
                                                <td class="p-3">
                                                    <div class="font-medium text-gray-800">100<span>%</span></div>
                                                </td>
                                                <td class="p-3">
                                                    <div class="font-medium text-gray-800">100<span>%</span></div>
                                                </td>
                                                <td class="p-3">
                                                    <div class="flex justify-center">
                                                        <button>
                                                            <svg class="w-8 h-8 text-gray-800 hover:text-blue-600 rounded-full hover:bg-white p-1" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11 5H6a2 2 0 00-2 2v11a2 2 0 002 2h11a2 2 0 002-2v-5m-1.414-9.414a2 2 0 112.828 2.828L11.828 15H9v-2.828l8.586-8.586z" />
                                                            </svg>
                                                        </button>
                                                    </div>
                                                </td>
                                            </tr>
                                            @endforeach
                                        </tbody>
                                    </table>
                                </div>
                                <div class="font-bold space-x-4 text-base border-t border-gray-100 px-5 py-4"></div>
                            </div>
                            <!-- Expenses -->
                            <div class="">
                                <div class="px-5 py-4 border-b border-gray-100">
                                    <div class="flex justify-center font-semibold text-lg text-red-600">支出<span class="pl-2 allura">- Expenses -</span></div>
                                </div>
                                <div class="overflow-x-auto p-3">
                                    <table class="table-auto w-full">
                                        <thead class="text-xs font-semibold uppercase text-gray-400 bg-gray-50">
                                            <tr>
                                                <th class="p-3">
                                                    <div class="font-semibold text-center">収入項目</div>
                                                </th>
                                                <th class="p-3">
                                                    <div class="font-semibold text-center">収入金額</div>
                                                </th>
                                                <th class="p-3">
                                                    <div class="font-semibold text-center">前月比</div>
                                                </th>
                                                <th class="p-3">
                                                    <div class="font-semibold text-center">前年比</div>
                                                </th>
                                                <th></th>
                                            </tr>
                                        </thead>
                                        <tbody class="text-sm divide-y divide-gray-100">
                                            @foreach (\SampleConst::SPEND_LIST as $value)
                                            <tr class="hover:bg-gray-50">
                                                <td class="p-3">
                                                    <div class="font-medium text-gray-800">{{ $value }}</div>
                                                </td>
                                                <td class="p-3">
                                                    <div class="font-medium text-gray-800">100,000<span>円</span></div>
                                                </td>
                                                <td class="p-3">
                                                    <div class="font-medium text-gray-800">100<span>%</span></div>
                                                </td>
                                                <td class="p-3">
                                                    <div class="font-medium text-gray-800">100<span>%</span></div>
                                                </td>
                                                <td class="p-3">
                                                    <div class="flex justify-center">
                                                        <button>
                                                            <svg class="w-8 h-8 text-gray-800 hover:text-blue-600 rounded-full hover:bg-white p-1" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11 5H6a2 2 0 00-2 2v11a2 2 0 002 2h11a2 2 0 002-2v-5m-1.414-9.414a2 2 0 112.828 2.828L11.828 15H9v-2.828l8.586-8.586z" />
                                                            </svg>
                                                        </button>
                                                    </div>
                                                </td>
                                            </tr>
                                            @endforeach
                                        </tbody>
                                    </table>
                                </div>
                                <div class="flex justify-end font-bold space-x-4 text-2xl border-t border-gray-100 px-5 py-4"></div>
                            </div>
                        </div>
                    </div>
                </div>
                <div x-show="activeTab===1">Content 2</div>
                <div x-show="activeTab===2">Content 3</div>
                <div x-show="activeTab===3">Content 4</div>
                <div x-show="activeTab===4">Content 4</div>
                <div x-show="activeTab===5">Content 4</div>
                <div x-show="activeTab===6">Content 4</div>
                <div x-show="activeTab===7">Content 4</div>
                <div x-show="activeTab===8">Content 4</div>
                <div x-show="activeTab===9">Content 4</div>
                <div x-show="activeTab===10">Content 4</div>
                <div x-show="activeTab===11">Content 4</div>
            </div>

            <ul class="flex justify-center items-center my-4">
                <template x-for="(tab, index) in tabs" :key="index">
                    <li class="cursor-pointer py-2 px-4 text-gray-600 border-t-8 hover:bg-gray-50" :class="activeTab===index ? 'text-green-600 border-green-600' : ''" @click="activeTab = index" x-text="tab"></li>
                </template>
            </ul>

            <div class="flex gap-4 justify-center border-t p-4">
                <button class="py-2 px-4 border rounded-md border-green-600 text-green-600 cursor-pointer uppercase text-sm font-bold hover:bg-green-600 hover:text-white hover:shadow duration-700" @click="activeTab--" x-show="activeTab>0">前月</button>
                <button class="py-2 px-4 border rounded-md border-green-600 text-green-600 cursor-pointer uppercase text-sm font-bold hover:bg-green-600 hover:text-white hover:shadow duration-700" @click="activeTab++" x-show="activeTab<tabs.length-1">次月</button>
            </div>
        </div>
        <!--actual component end-->
    </div>
</div>

<script>
    function setup() {
        return {
            activeTab: 0,
            tabs: [
                "1月",
                "2月",
                "3月",
                "4月",
                "5月",
                "6月",
                "7月",
                "8月",
                "9月",
                "10月",
                "11月",
                "12月",
            ]
        };
    };
</script>

@endsection
