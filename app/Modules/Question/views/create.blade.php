@extends('Base::layout.dashboard.base')


@section('content')
    <!-- Small boxes (Stat box) -->
    <div class="row">

        <div class="col-md-12">
            <!-- general form elements -->
            <div class="card card-primary">
                <div class="card-header">
               <div id="errorMessages"></div>
                </div>

                <!-- /.card-header -->
                <!-- form start -->
                <form role="form" id="challengeForm"  method="post" action="{{ route('question.store') }}" enctype="multipart/form-data">
                    @csrf
                    <div class="card-body ">
                        <div class="form-group col-md-6">
                            <label for="exampleInputEmail1">اختر الدورى</label>
                           <select class="form-control" required name="dawry_id" id="dawry_id">
                               <option value="{{null}}">إختر الدورى</option>
                               @foreach($dawries as $dawry)
                                   <option value="{{ $dawry->id }}">{{ $dawry->name }}</option>
                               @endforeach
                           </select>
                            @error('dawry_id')
                            <div class="error alert alert-error">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="form-group col-md-6">
                            <label for="exampleInputEmail1">اختر الحزمه</label>
                           <select class="form-control" required name="hezma_id" id="hezma_id">
                               <option value="{{null}}">إختر الحزمه</option>
                               @foreach($hezmas as $hezma)
                                   <option value="{{ $hezma->id }}">{{ $hezma->name }}</option>
                               @endforeach
                           </select>
                            @error('challenge_id')
                            <div class="error alert alert-error">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="form-group col-md-6">
                            <label for="exampleInputEmail1">اختر التحدى</label>
                           <select class="form-control" required name="challenge_id" id="challenge_id">
                               <option value="{{null}}">إختر تحدى</option>
                               @foreach($challenges as $challenge)
                                   <option value="{{ $challenge->id }}">{{ $challenge->name }}</option>
                               @endforeach
                           </select>
                            @error('challenge_id')
                            <div class="error alert alert-error">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="div-form"></div>


                    </div>
                    <!-- /.card-body -->

                    <div class="card-footer">
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </div>
                </form>
            </div>
            <!-- /.card -->
        </div>
    </div>


@endsection

@section('script')




    <script type="text/javascript">
        $(document).ready(function () {
            $(document).on('change','#challenge_id',function () {
               let challenge = $(this).val();
               console.log(challenge)
               if(challenge !== null && challenge !== "" ){
                   $('.div-form').empty();
                   if (challenge == 1 || challenge == 2){
                       $('.div-form').html(`<div class="form-group col-md-6">
                            <label for="exampleInputEmail1">اسم </label>
                            <input type="text" class="form-control" id="exampleInputEmail1" required name="question" value="">

                       </div>`);
                   }// end if
                    if (challenge == 3 ){
                       $('.div-form').html(`<div class="form-group col-md-6">
                            <label for="file1">تحميل صوره </label>
                            <input type="file" class="form-control-file choice"  id="file1" name="photo"></div>

<div class="form-group col-md-6">
                            <label for="file2">الاختيار الاول  </label>
 <input type="checkbox" name="is_correct[1]" class="is_correct">
                            <input type="text" class="form-control choice"  id="file2" name="choice[1]">

</div>

<div class="form-group col-md-6">
                            <label for="file3">الاختيار الثانى </label>
 <input type="checkbox" name="is_correct[2]" class="is_correct">
                            <input type="text" class="form-control choice"  id="file3" name="choice[2]"></div>

<div class="form-group col-md-6">
                            <label for="file4">الاختيار الثالث </label>
 <input type="checkbox" name="is_correct[3]" class="is_correct">
                            <input type="text" class="form-control choice"  id="file4" name="choice[3]"></div>

<div class="form-group col-md-6">
                            <label for="file5">الاختيار الرابع </label>
 <input type="checkbox" name="is_correct[4]" class="is_correct">
                            <input type="text" class="form-control choice"  id="file5" name="choice[4]"></div>

                        `);
                   }// end if

                   if (challenge == 4 || challenge == 5 ){
                       $('.div-form').html(`<div class="form-group col-md-6">
                            <label for="file1">تحميل صوره </label>
                            <input type="file" class="form-control-file"  id="file1" name="photo"></div>

                            <div class="form-group col-md-6">
                            <label for="w3review">ادخل الوصف  </label>
                            <textarea id="w3review" class="form-control" name="description" rows="4" cols="50"></textarea>

                        `);
                   }// end if



                   if (challenge == 6  ){
                       $('.div-form').html(`<div class="form-group col-md-6">
                            <label for="exampleInputEmail1">السؤال </label>
                            <input type="text" class="form-control" id="exampleInputEmail1" required name="question" value="">

                       </div>

<div class="form-group col-md-6">
                            <label for="file2">الاختيار الاول  </label>
 <input type="radio" name="is_correct" value="1" class="is_correct">
                            <input type="text" class="form-control-file choice"  id="file2" name="choice[1]"></div>

<div class="form-group col-md-6">
                            <label for="file3">الاختيار الثانى </label>
 <input type="radio" name="is_correct" value="2" class="is_correct">
                            <input type="text" class="form-control-file choice"  id="file3" name="choice[2]"></div>

<div class="form-group col-md-6">
                            <label for="file4">الاختيار الثالث </label>
 <input type="radio" name="is_correct" value="3" class="is_correct">
                            <input type="text" class="form-control-file choice"  id="file4" name="choice[3]"></div>

<div class="form-group col-md-6">
                            <label for="file5">الاختيار الرابع </label>
 <input type="radio" name="is_correct" value="4" class="is_correct">
                            <input type="text" class="form-control-file choice"  id="file5" name="choice[4]"></div>

                        `);
                   }// end if
                    if ( challenge == 7  ){
                       $('.div-form').html(`<div class="form-group col-md-6">
                            <label for="exampleInputEmail1">السؤال </label>

                            <input type="text" class="form-control" id="exampleInputEmail1" required name="question" value="">

                       </div>

<div class="form-group col-md-6">
                            <label for="file2">الاختيار الاول  </label>
 <input type="checkbox" name="is_correct[1]" class="is_correct">
                            <input type="text" class="form-control-file choice"  id="file2" name="choice[1]"></div>

<div class="form-group col-md-6">
                            <label for="file3">الاختيار الثانى </label>
 <input type="checkbox" name="is_correct[2]" class="is_correct">
                            <input type="text" class="form-control-file choice"  id="file3" name="choice[2]"></div>

<div class="form-group col-md-6">
                            <label for="file4">الاختيار الثالث </label>
 <input type="checkbox" name="is_correct[3]" class="is_correct">
                            <input type="text" class="form-control-file choice"  id="file4" name="choice[3]"></div>

<div class="form-group col-md-6">
                            <label for="file5">الاختيار الرابع </label>
 <input type="checkbox" name="is_correct[4]" class="is_correct">
                            <input type="text" class="form-control-file choice"  id="file5" name="choice[4]"></div>

                        `);
                   }// end if


                   if (challenge == 8  ){
                       $('.div-form').html(`<div class="form-group col-md-6">
                            <label for="exampleInputEmail1">السؤال </label>
                            <input type="text" class="form-control" id="exampleInputEmail1" required name="question" value="">

                       </div>

<div class="form-group col-md-6">
                            <label for="file2">الاختيار الاول  </label>
 <input type="radio" name="is_correct" value="1" class="is_correct">
                            <input type="text" class="form-control-file choice"  id="file2" name="choice[1]"></div>

<div class="form-group col-md-6">
                            <label for="file3">الاختيار الثانى </label>
 <input type="radio" name="is_correct" value="2" class="is_correct">
                            <input type="text" class="form-control-file choice"  id="file3" name="choice[2]"></div>

<div class="form-group col-md-6">
                            <label for="file4">الاختيار الثالث </label>
 <input type="radio" name="is_correct" value="3" class="is_correct">
                            <input type="text" class="form-control-file choice"  id="file4" name="choice[3]"></div>

<div class="form-group col-md-6">
                            <label for="file5">الاختيار الرابع </label>
 <input type="radio" name="is_correct" value="4" class="is_correct">
                            <input type="text" class="form-control-file choice"  id="file5" name="choice[4]"></div>

                        `);
                   }// end if



               } else {
                    console.log('saaa')
               }// end if challenge
            })// end change select









            $('#challengeForm').on('submit', function (event) {
                event.preventDefault(); // Prevent form submission for validation

                var challengeId = $('select[name="challenge_id"]').val();
                var errors = [];
                var hasErrors = false;

                // Validate question field
                var question = $('input[name="question"]').val();
                if ([1, 2, 6, 7, 8].includes(parseInt(challengeId)) && !question.trim()) {
                    errors.push("السؤال مطلوب عندما يكون التحدى " + challengeId + ".");
                    hasErrors = true;
                }

                // Validate choice field
                var choices = $('.choice').map(function () {
                    return $(this).val();
                }).get();
                console.log(choices)
                if ([3, 6, 7, 8].includes(parseInt(challengeId))) {
                    if (choices.every(item => !item.trim())) {
                        errors.push("يجب ملء حقل الاختيارات عند اختيار التحدى " + challengeId + ".");
                        hasErrors = true;
                    }
                }

                // Validate photo field
                var photo = $('input[name="photo"]').val();
                if ([3, 4, 5].includes(parseInt(challengeId)) && !photo) {
                    errors.push("الصورة مطلوبة عندما يكون التحدى " + challengeId + ".");
                    hasErrors = true;
                }

                // Validate description field
                var description = $('textarea[name="description"]').val();
                if ([4, 5].includes(parseInt(challengeId)) && !description.trim()) {
                    errors.push("الوصف مطلوب عندما يكون التحدى " + challengeId + ".");
                    hasErrors = true;
                }

                // Validate is_correct field
                var isCorrect = $('.is_correct:checked').val();
                var isCorrectArray = $('.is_correct:checked').map(function () {
                    return $(this).val();
                }).get();

                if ([3, 6, 7, 8].includes(parseInt(challengeId))) {
                    if (isCorrectArray.length === 0 && !isCorrect) {
                        errors.push("الاختيار الصحيح مطلوب عندما يكون التحدى " + challengeId + ".");
                        hasErrors = true;
                    }
                }

                // Display errors if any
                if (hasErrors) {
                    $('#errorMessages').html(errors.join('<br>'));
                } else {
                    // Submit the form if no errors
                    this.submit();
                }
            });



        })
    </script>

    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

    <script>
        // $(document).ready(function() {
        //     $('#challengeForm').on('submit', function(event) {
        //         event.preventDefault(); // Prevent form from submitting initially
        //
        //         var challengeId = $('input[name="challenge_id"]').val();
        //         var errors = [];
        //         var hasErrors = false;
        //
        //         // Validate question field
        //         var question = $('input[name="question"]').val();
        //         if ([1, 2, 6, 7, 8].includes(parseInt(challengeId)) && !question.trim()) {
        //             errors.push("Question field is required when the challenge is " + challengeId + ".");
        //             hasErrors = true;
        //         }
        //
        //         // Validate choice field
        //         var choice = $('input[name="choice[]"]').map(function() {
        //             return $(this).val();
        //         }).get();
        //         if ([3, 6, 7, 8].includes(parseInt(challengeId))) {
        //             if (choice.every(item => !item.trim())) {
        //                 errors.push("At least one choice field is required when the challenge is " + challengeId + ".");
        //                 hasErrors = true;
        //             }
        //         }
        //
        //         // Validate photo field
        //         var photo = $('input[name="photo"]').val();
        //         if ([3, 4, 5].includes(parseInt(challengeId)) && !photo) {
        //             errors.push("Photo field is required when the challenge is " + challengeId + ".");
        //             hasErrors = true;
        //         }
        //
        //         // Validate description field
        //         var description = $('textarea[name="description"]').val();
        //         if ([4, 5].includes(parseInt(challengeId)) && !description.trim()) {
        //             errors.push("Description field is required when the challenge is " + challengeId + ".");
        //             hasErrors = true;
        //         }
        //
        //         // Validate is_correct field
        //         var isCorrect = $('input[name="is_correct"]:checked').val();
        //         var isCorrectArray = $('input[name="is_correct[]"]:checked').map(function() {
        //             return $(this).val();
        //         }).get();
        //
        //         if ([3, 6, 7, 8].includes(parseInt(challengeId))) {
        //             if (isCorrectArray.length === 0 && !isCorrect) {
        //                 errors.push("is_correct field is required when the challenge is " + challengeId + ".");
        //                 hasErrors = true;
        //             }
        //         }
        //
        //         // Display errors if any
        //         if (hasErrors) {
        //             $('#errorMessages').html(errors.join('<br>'));
        //         } else {
        //             // Submit the form if no errors
        //             this.submit();
        //         }
        //     });
        // });
    </script>




@endsection
