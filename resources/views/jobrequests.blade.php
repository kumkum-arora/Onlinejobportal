
<!DOCTYPE html>
<html lang="zxx">
<head>

    <title>Job Requests</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <!-- Google Font -->
    <link href="https://fonts.googleapis.com/css2?family=Nunito+Sans:wght@300;400;600;700;800;900&display=swap" rel="stylesheet">

</head>

<body>
      <!-- add header here -->
      @include('common/header')


    <!-- component -->
    <div class="text-gray-900 ">
        <div class="p-4 flex">
            <h1 class="text-2xl font-bold pl-5 pt-5">
                Users who apply job....
            </h1>
        </div>
    </div>
    <!-- component -->
    <link rel="stylesheet" href="https://cdn.tailgrids.com/tailgrids-fallback.css" />

    <!-- ====== Table Section Start -->
    <section class="bg-white py-20 lg:py-[20px]">
        <div class="container">
            <div class="flex flex-wrap -mx-4">
                <div class="w-full px-4">
                    <div class="max-w-full overflow-x-auto">
                        <table class="table-auto w-full">
                            <thead>
                                <tr class="bg-gray-400 text-center">
                                    <th class="w-1/6 min-w-[160px]text-lgfont-semibold text-white py-4 lg:py-7px-3lg:px-4 border-l border-transparent">Name</th>
                                    <th class="w-1/6 min-w-[160px]text-lgfont-semibold text-white py-4 lg:py-7px-3lg:px-4 border-l border-transparent">Email</th>
                                    <th class="w-1/6 min-w-[160px]text-lgfont-semibold text-white py-4 lg:py-7px-3lg:px-4 border-l border-transparent">City</th>
                                    <th class="w-1/6 min-w-[160px]text-lgfont-semibold text-white py-4 lg:py-7px-3lg:px-4 border-l border-transparent">Qualification</th>
                                    <th class="w-1/6 min-w-[160px]text-lgfont-semibold text-white py-4 lg:py-7px-3lg:px-4 border-l border-transparent">Job Experience</th>
                                    <th class="w-1/6 min-w-[160px]text-lgfont-semibold text-white py-4 lg:py-7px-3lg:px-4 border-l border-transparent">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                              
                                @foreach($Candidates as $row)
                                <tr>
                                    <td class="text-center text-dark font-medium text-base py-5 px-2 bg-[#F3F6FF] border-b border-l border-[#E8E8E8]">{{$row->name}}</td>
                                    <td class="text-center text-dark font-medium text-base py-5 px-2  bg-white border-b border-l border-[#E8E8E8]">{{$row->email}}</td>
                                    <td class="text-center text-dark font-medium text-base py-5 px-2 bg-[#F3F6FF] border-b border-l border-[#E8E8E8]">{{$row->city}}</td>
                                    <td class="text-center text-dark font-medium text-base py-5 px-2  bg-white border-b border-l border-[#E8E8E8]">{{$row->qualification}}</td>
                                    <td class="text-center text-dark font-medium text-base py-5 px-2 bg-[#F3F6FF] border-b border-l border-[#E8E8E8]">{{$row->employeetype}}</td>
                                    <td class="text-center text-dark font-medium text-base py-5 px-2  bg-white border-b border-l border-[#E8E8E8]">
                                        @if($row->status == 1)
                                        <a href="{{'view-candidate'.$row->id}}" class=" border border-gray-400  py-2 px-4  text-black inline-block rounded bg-green-600  hover:text-white">Selected</a>
                                        @elseif($row->status == 2)
                                        <a href="{{'view-candidate'.$row->id}}" class=" border border-gray-400  py-2 px-4  text-black inline-block rounded bg-red-600  hover:text-white">Rejected</a>
                                        @else
                                        <a href="{{'view-candidate'.$row->id}}" class=" border border-gray-400  py-2 px-4  text-black inline-block rounded hover:bg-gray-400  hover:text-white">View</a>
                                        @endif
                                        <a href="{{'delete'.$row->id}}" class=" border border-gray-400  py-2 px-2 text-black inline-block rounded hover:bg-gray-400  hover:text-white ml-2">Delete</a></td>
                                </tr>
                                @endforeach
                               
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ====== Table Section End -->




</body>

</html>