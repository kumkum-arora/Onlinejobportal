<!DOCTYPE html>
<html lang="zxx">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Registration Form</title>
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
    @if(!empty($ticketid))
    <?php
    echo "<script>alert('Please note the ticket number With this ticket number you can check the status of applied job.. Ticket id = $ticketid')</script>";
    ?>
    @endif
    <div class="flex items-center justify-center p-12">
        <div class="mx-auto w-full max-w-[550px]">

            <div class="mb-5">
                <label for="name" class="mb-3 block text-base font-medium text-[#07074D]">
                    <h1 class="text-4xl font-medium">Job Registration Form</h1>
                </label>
            </div>
            @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
            @endif
            <form action="registration-submit" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="mb-5">
                    <label for="name" class="mb-3 block text-base font-medium text-[#07074D]">
                        Enter Your Fullname
                    </label>
                    <input type="text" name="name" id="name" placeholder="Your Answer" class="w-full rounded-md border border-[#e0e0e0] bg-white py-3 px-6 text-base font-medium text-[#6B7280] outline-none focus:border-[#6A64F1] focus:shadow-md" />
                </div>

                <div class="mb-5">
                    <label for="subject" class="mb-3 block text-base font-medium text-[#07074D]">
                        Email Address
                    </label>
                    <input type="email" name="email" id="subject" placeholder="example@gmail.com" class="w-full rounded-md border border-[#e0e0e0] bg-white py-3 px-6 text-base font-medium text-[#6B7280] outline-none focus:border-[#6A64F1] focus:shadow-md" />
                </div>
                <div class="mb-5">
                    <label for="subject" class="mb-3 block text-base font-medium text-[#07074D]">
                        Password
                    </label>
                    <input type="password" name="password" id="subject" placeholder="Your Answer" class="w-full rounded-md border border-[#e0e0e0] bg-white py-3 px-6 text-base font-medium text-[#6B7280] outline-none focus:border-[#6A64F1] focus:shadow-md" />
                </div>
                <div class="mb-5">
                    <label for="subject" class="mb-3 block text-base font-medium text-[#07074D]">
                        Phone Number or Alternate Contact if any
                    </label>
                    <input type="phone" name="phone" id="subject" placeholder="Your Answer" class="w-full rounded-md border border-[#e0e0e0] bg-white py-3 px-6 text-base font-medium text-[#6B7280] outline-none focus:border-[#6A64F1] focus:shadow-md" />
                </div>
                <div class="mb-5">
                    <label for="subject" class="mb-3 block text-base font-medium text-[#07074D]">
                        Current Address or Residence
                    </label>
                    <input type="text" name="address" id="subject" placeholder="Your Answer" class="w-full rounded-md border border-[#e0e0e0] bg-white py-3 px-6 text-base font-medium text-[#6B7280] outline-none focus:border-[#6A64F1] focus:shadow-md" />
                </div>
                <div class="mb-5">
                    <label for="subject" class="mb-3 block text-base font-medium text-[#07074D]">
                        City
                    </label>
                    <input type="text" name="city" id="subject" placeholder="Your Answer" class="w-full rounded-md border border-[#e0e0e0] bg-white py-3 px-6 text-base font-medium text-[#6B7280] outline-none focus:border-[#6A64F1] focus:shadow-md" />
                </div>
                <div class="mb-5">
                    <label for="subject" class="mb-3 block text-base font-medium text-[#07074D]">
                        State
                    </label>
                    <input type="text" name="state" id="subject" placeholder="Your Answer" class="w-full rounded-md border border-[#e0e0e0] bg-white py-3 px-6 text-base font-medium text-[#6B7280] outline-none focus:border-[#6A64F1] focus:shadow-md" />
                </div>
                <div class="mb-5">
                    <label for="subject" class="mb-3 block text-base font-medium text-[#07074D]">
                        Country
                    </label>
                    <input type="text" name="country" id="subject" placeholder="Your Answer" class="w-full rounded-md border border-[#e0e0e0] bg-white py-3 px-6 text-base font-medium text-[#6B7280] outline-none focus:border-[#6A64F1] focus:shadow-md" />
                </div>
                <div class="mb-5">
                    <label for="subject" class="mb-3 block text-base font-medium text-[#07074D]">
                        Postcode
                    </label>
                    <input type="text" name="postcode" id="subject" placeholder="Your Answer" class="w-full rounded-md border border-[#e0e0e0] bg-white py-3 px-6 text-base font-medium text-[#6B7280] outline-none focus:border-[#6A64F1] focus:shadow-md" />
                </div>
                <div class="mb-5">
                    <label for="subject" class="mb-3 block text-base font-medium text-[#07074D]">
                        DOB
                    </label>
                    <input type="date" name="dob" id="subject" placeholder="date" class="w-full rounded-md border border-[#e0e0e0] bg-white py-3 px-6 text-base font-medium text-[#6B7280] outline-none focus:border-[#6A64F1] focus:shadow-md" />
                </div>
                <div class="mb-5">
                    <label for="subject" class="mb-3 block text-base font-medium text-[#07074D]">
                        Qualification or Higher Education
                    </label>
                    <input type="text" name="qualification" id="subject" placeholder="Your Answer" class="w-full rounded-md border border-[#e0e0e0] bg-white py-3 px-6 text-base font-medium text-[#6B7280] outline-none focus:border-[#6A64F1] focus:shadow-md" />
                </div>
                <div class="mb-5">
                    <label for="subject" class="mb-3 block text-base font-medium text-[#07074D]">
                        Employee Type
                    </label>
                    <div class="mb-5 rounded-md border border-[#e0e0e0] bg-white pt-3 pb-9 pl-10 pr-10">
                        <label for="subject" class="mb-3 block text-base font-medium text-[#07074D] float-left">
                            <input type="radio" name="employeetype" id="subject" value="Experience" />
                            Experience
                        </label>
                        <label for="subject" class="mb-3 block text-base font-medium text-[#07074D] float-right">
                            <input type="radio" name="employeetype" id="subject" value="fresher" />
                            Fresher
                        </label>
                    </div>
                    <div class="mb-5">
                        <label for="subject" class="mb-3 block text-base font-medium text-[#07074D]">
                            Experience Details
                        </label>
                        <input type="text" name="expdetails" id="subject" placeholder="Your Answer" class="w-full rounded-md border border-[#e0e0e0] bg-white py-3 px-6 text-base font-medium text-[#6B7280] outline-none focus:border-[#6A64F1] focus:shadow-md" />
                    </div>
                    <div class="mb-5">
                        <label for="subject" class="mb-3 block text-base font-medium text-[#07074D]">
                            Hobby
                        </label>
                        <input type="text" name="hobby" id="subject" placeholder="Your Answer" class="w-full rounded-md border border-[#e0e0e0] bg-white py-3 px-6 text-base font-medium text-[#6B7280] outline-none focus:border-[#6A64F1] focus:shadow-md" />
                    </div>
                    <div class="mb-5">
                        <label for="subject" class="mb-3 block text-base font-medium text-[#07074D]">
                            Resume Upload Here
                        </label>
                        <input type="file" name="resumefile" id="subject" accept="application/pdf, application/doc, application/docs" placeholder="Enter your subject" class="w-full rounded-md border border-[#e0e0e0] bg-white py-3 px-6 text-base font-medium text-[#6B7280] outline-none focus:border-[#6A64F1] focus:shadow-md" />
                    </div>
                    <input type="hidden" name="status" value="0" />
                    <div>
                        <button type="submit" class="hover:shadow-form rounded-md bg-[#6A64F1] py-3 px-8 text-base font-semibold text-white outline-none">
                            Submit
                        </button>
                    </div>
            </form>
        </div>
    </div>

    {{-- add footer here  --}}

</body>

</html>