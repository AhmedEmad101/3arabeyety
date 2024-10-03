@include('PartialViews.Head')
@include('PartialViews.navbar')
<form action="searchprice" method="POST">
    @csrf
    <input type="text" name="minprice" id="" placeholder="minprice">
    <input type="text" name="maxprice" id=""placeholder="maxprice">
    <button type="submit">Ok</button>
</form>
