<!DOCTYPE html>
<html lang="zxx">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Candidate all details</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <!-- Google Font -->
    <link href="https://fonts.googleapis.com/css2?family=Nunito+Sans:wght@300;400;600;700;800;900&display=swap" rel="stylesheet">

    <!-- Css Styles -->
    <link rel="stylesheet" href="style.css" type="text/css">
</head>

<body>
    <!-- add header here -->
    @include('common/header')
    <!-- component -->
    <div class="flex items-center justify-center p-12">
        <div class="mx-auto w-full max-w-[550px]">

            <div class="mb-5">
                <label for="name" class="mb-3 block text-base font-medium text-[#07074D]">
                    <h1 class="text-4xl font-medium">Detail of Applicant</h1>
                </label>
            </div>
            @foreach($details as $detail)
            <form action="{{url('update'.$detail->id)}}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="mb-5">
                    <label for="name" class="mb-3 block text-base font-medium text-[#07074D]">
                        Enter Your Fullname
                    </label>
                    <input type="text" name="name" id="name" value="{{$detail->name}}" placeholder="Your Answer" class="w-full rounded-md border border-[#e0e0e0] bg-white py-3 px-6 text-base font-medium text-[#6B7280] outline-none focus:border-[#6A64F1] focus:shadow-md" />
                </div>

                <div class="mb-5">
                    <label for="subject" class="mb-3 block text-base font-medium text-[#07074D]">
                        Email Address
                    </label>
                    <input type="email" name="email" id="subject" value="{{$detail->email}}" placeholder="example@gmail.com" class="w-full rounded-md border border-[#e0e0e0] bg-white py-3 px-6 text-base font-medium text-[#6B7280] outline-none focus:border-[#6A64F1] focus:shadow-md" />
                </div>
                <div class="mb-5">
                    <label for="subject" class="mb-3 block text-base font-medium text-[#07074D]">
                        Password
                    </label>
                    <input type="password" name="password" id="subject" value="{{$detail->password}}" placeholder="Your Answer" class="w-full rounded-md border border-[#e0e0e0] bg-white py-3 px-6 text-base font-medium text-[#6B7280] outline-none focus:border-[#6A64F1] focus:shadow-md" />
                </div>
                <div class="mb-5">
                    <label for="subject" class="mb-3 block text-base font-medium text-[#07074D]">
                        Phone Number or Alternate Contact if any
                    </label>
                    <input type="phone" name="phone" value="{{$detail->phone}}" id="subject" placeholder="Your Answer" class="w-full rounded-md border border-[#e0e0e0] bg-white py-3 px-6 text-base font-medium text-[#6B7280] outline-none focus:border-[#6A64F1] focus:shadow-md" />
                </div>
                <div class="mb-5">
                    <label for="subject" class="mb-3 block text-base font-medium text-[#07074D]">
                        Current Address or Residence
                    </label>
                    <input type="text" name="address" id="subject" value="{{$detail->address}}" placeholder="Your Answer" class="w-full rounded-md border border-[#e0e0e0] bg-white py-3 px-6 text-base font-medium text-[#6B7280] outline-none focus:border-[#6A64F1] focus:shadow-md" />
                </div>
                <div class="mb-5">
                    <label for="subject" class="mb-3 block text-base font-medium text-[#07074D]">
                        City
                    </label>
                    <input type="text" name="city" id="subject" value="{{$detail->city}}" placeholder="Your Answer" class="w-full rounded-md border border-[#e0e0e0] bg-white py-3 px-6 text-base font-medium text-[#6B7280] outline-none focus:border-[#6A64F1] focus:shadow-md" />
                </div>
                <div class="mb-5">
                    <label for="subject" class="mb-3 block text-base font-medium text-[#07074D]">
                        State
                    </label>
                    <input type="text" name="state" id="subject" value="{{$detail->state}}" placeholder="Your Answer" class="w-full rounded-md border border-[#e0e0e0] bg-white py-3 px-6 text-base font-medium text-[#6B7280] outline-none focus:border-[#6A64F1] focus:shadow-md" />
                </div>
                <div class="mb-5">
                    <label for="subject" class="mb-3 block text-base font-medium text-[#07074D]">
                        Country
                    </label>
                    <input type="text" name="country" id="subject" value="{{$detail->country}}" placeholder="Your Answer" class="w-full rounded-md border border-[#e0e0e0] bg-white py-3 px-6 text-base font-medium text-[#6B7280] outline-none focus:border-[#6A64F1] focus:shadow-md" />
                </div>
                <div class="mb-5">
                    <label for="subject" class="mb-3 block text-base font-medium text-[#07074D]">
                        Postcode
                    </label>
                    <input type="text" name="postcode" value="{{$detail->postcode}}" id="subject" placeholder="Your Answer" class="w-full rounded-md border border-[#e0e0e0] bg-white py-3 px-6 text-base font-medium text-[#6B7280] outline-none focus:border-[#6A64F1] focus:shadow-md" />
                </div>
                <div class="mb-5">
                    <label for="subject" class="mb-3 block text-base font-medium text-[#07074D]">
                        DOB
                    </label>
                    <input type="text" name="dob" id="subject" value="{{$detail->dob}}" placeholder="date" class="w-full rounded-md border border-[#e0e0e0] bg-white py-3 px-6 text-base font-medium text-[#6B7280] outline-none focus:border-[#6A64F1] focus:shadow-md" />
                </div>
                <div class="mb-5">
                    <label for="subject" class="mb-3 block text-base font-medium text-[#07074D]">
                        Qualification or Higher Education
                    </label>
                    <input type="text" name="qualification" value="{{$detail->qualification}}" id="subject" placeholder="Your Answer" class="w-full rounded-md border border-[#e0e0e0] bg-white py-3 px-6 text-base font-medium text-[#6B7280] outline-none focus:border-[#6A64F1] focus:shadow-md" />
                </div>
                <div class="mb-5">
                    <label for="subject" class="mb-3 block text-base font-medium text-[#07074D]">
                        Job Experience
                    </label>
                    <div class="mb-5 rounded-md border border-[#e0e0e0] bg-white pt-3 pb-9 pl-10 pr-10">
                        <label for="subject" class="mb-3 block text-base font-medium text-[#07074D] float-left">
                            <input type="text" value="{{$detail->employeetype}}" name="employeetype" id="subject" value="Experience" />

                        </label>

                    </div>
                    <div class="mb-5">
                        <label for="subject" class="mb-3 block text-base font-medium text-[#07074D]">
                            Experience Details
                        </label>
                        <input type="text" name="expdetails" value="{{$detail->expdetails}}" id="subject" placeholder="Your Answer" class="w-full rounded-md border border-[#e0e0e0] bg-white py-3 px-6 text-base font-medium text-[#6B7280] outline-none focus:border-[#6A64F1] focus:shadow-md" />
                    </div>
                    <div class="mb-5">
                        <label for="subject" class="mb-3 block text-base font-medium text-[#07074D]">
                            Hobby
                        </label>
                        <input type="text" name="hobby" value="{{$detail->hobby}}" id="subject" placeholder="Your Answer" class="w-full rounded-md border border-[#e0e0e0] bg-white py-3 px-6 text-base font-medium text-[#6B7280] outline-none focus:border-[#6A64F1] focus:shadow-md" />
                    </div>
                    <div class="mb-5">
                        <label for="subject" class="mb-3 block text-base font-medium text-[#07074D]">
                            Resume Upload Here
                        </label>
                        <input type="file" name="resumefile" value="{{$detail->resume}}" id="subject" accept="application/pdf, application/doc, application/docs" placeholder="Enter your subject" class="w-full rounded-md border border-[#e0e0e0] bg-white py-3 px-6 text-base font-medium text-[#6B7280] outline-none focus:border-[#6A64F1] focus:shadow-md" />

                        <!-- <embed src="storage/{{$detail->resume}}" style="width:600px; height:800px;" frameborder="0"> -->
                    </div>
                    <div class="mb-5">
                        <label for="subject" class="mb-3 block text-base font-medium text-[#07074D]">
                            Update Status
                        </label>
                        <div class="mb-5 rounded-md border border-[#e0e0e0] bg-white pt-3 pb-9 pl-10 pr-10">
                            <label for="subject" class="mb-3 block text-base font-medium text-[#07074D] float-left">
                                <input type="checkbox" name="status" id="subject" value="1" />
                                Selected
                            </label>
                            <label for="subject" class="mb-3 block text-base font-medium text-[#07074D] float-right">
                                <input type="checkbox" name="status" id="subject" value="2" />
                                Rejected
                            </label>
                        </div>
                        <div>
                            <button type="submit" class="hover:shadow-form rounded-md bg-[#6A64F1] py-3 px-8 text-base font-semibold text-white outline-none">
                                Submit
                            </button>
                        </div>
            </form>
            @endforeach
        </div>
    </div>

    {{-- add footer here  --}}

</body>

</html>