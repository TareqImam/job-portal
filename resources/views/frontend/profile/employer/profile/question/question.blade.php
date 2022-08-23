@extends('frontend.profile.employer.employer')

@section('employer_content')

<div class="container mb-3">
    <h4>Add a Question</h4>

    <form class="mb-3" action="{{route('single.submit', $exam->id)}}" method="POST" enctype="multipart/form-data">
        @csrf

        <label for="" class="mt-3">Question</label>
        <input type="text" class="form-control" name="question" required>

        <label for="" class="mt-3">Correct Answer</label>
        <input type="text" class="form-control" name="answer" required>

        <div class="field_wrapper">
            <div style="margin-bottom: 5px">
                <label for="" class="mt-3">Options</label><br>
                <input type="text" name="option[]">
                <a href="javascript:void(0);" class="add_button"
                    style="color: white; background-color:#FB246A; padding:5px 10px;" title="Add field">+</a>
            </div>
        </div>

        <button type="submit" class="btn mt-3">Submit</button>
    </form>


</div>






{{--------------- script  --------------------}}
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script type="text/javascript">
    $( document ).ready( function () {
        var maxField = 10;
        var addButton = $( '.add_button' );
        var wrapper = $( '.field_wrapper' );
        var fieldHTML =
            '<div style="margin-bottom: 5px"><input type="text" name="option[]"><a href="javascript:void(0);" class="remove_button" style="color: white; background-color:#FB246A; padding:5px 10px;">-</a></div>';
        var x = 1;


        $( addButton ).click( function () {
            if ( x < maxField ) {
                x++;
                $( wrapper ).append( fieldHTML );
            }
        } );

        $( wrapper ).on( 'click', '.remove_button', function ( e ) {
            e.preventDefault();
            $( this ).parent( 'div' ).remove();
            x--;
        } );
    } );

</script>
@endsection
