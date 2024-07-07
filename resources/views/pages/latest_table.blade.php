<div class="-mx-4 sm:-mx-8 px-4 sm:px-8 py-4 overflow-x-auto">
    <div class="inline-block min-w-full shadow-md rounded-lg overflow-hidden">
        <table class="min-w-full leading-normal">
            <thead>
                <tr>

                    <th
                        class="px-5 py-3 border-b-2 border-gray-200 bg-gray-100 text-center text-xs font-semibold text-gray-700 uppercase tracking-wider">
                        #
                    </th>
                    <th
                        class="px-5 py-3 border-b-2 border-gray-200 bg-gray-100 text-right text-xs font-semibold text-gray-700 uppercase tracking-wider">
                        الإسم
                    </th>

                    <th
                        class="px-5 py-3 border-b-2 border-gray-200 bg-gray-100 text-center text-xs font-semibold text-gray-700 uppercase tracking-wider">
                        تاريخ التسجيل
                    </th>
                    <th
                        class="px-5 py-3 border-b-2 border-gray-200 bg-gray-100 text-center text-xs font-semibold text-gray-700 uppercase tracking-wider">
                        الحالة
                    </th>
                    <th class="px-5 py-3 border-b-2 border-gray-200 bg-gray-100"></th>
                </tr>
            </thead>
            <tbody>

                @foreach ($pages as $page)
                    <tr>


                        <td class="px-5 py-5 border-b border-gray-200 bg-white text-sm">
                            <p class="text-gray-900 whitespace-no-wrap">{{ $page->id }}</p>
                        </td>
                        <td class="px-5 py-5 border-b  border-gray-200 bg-white text-sm">
                            <div class="flex">
                                <div class="flex-shrink-0 w-10 h-10">
                                    <img class="w-full h-full rounded-full" src="{{ asset('images/' . $page->logo) }}"
                                        alt="" />
                                </div>
                                <div class="mr-3">
                                    <p class="text-gray-900 whitespace-no-wrap">
                                        {{ $page->name }}
                                    </p>
                                    <p class="text-gray-600 whitespace-no-wrap">{{ $page->phone }}</p>


                                </div>
                            </div>
                        </td>

                        <td class="px-5 py-5 border-b border-gray-200 bg-white text-sm">
                            <p class="text-gray-900 whitespace-no-wrap">{{ $page->created_at }}</p>
                            <p class="text-gray-600 whitespace-no-wrap">{{ $page->created_at->diffForHumans() }}</p>
                        </td>
                        <td class="px-5 py-5 border-b border-gray-200 bg-white text-sm">
                            <span class="badge badge-{{ $page->status }}">{{ __('all.' . $page->status) }}</span>
                        </td>
                        <td class="px-5 py-5 border-b border-gray-200 bg-white text-sm text-right">
                            <Link slideover class="action-icon  tooltip-trigger" data-tooltip-target="tooltip-view"
                                href="{{ route('pages.show', ['page' => $page]) }}"><i class="fi fi-rr-globe"></i>
                            </Link>
                        </td>
                    </tr>
                @endforeach

            </tbody>
        </table>
    </div>
</div>
