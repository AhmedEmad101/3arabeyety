
@include('PartialViews.Head')
@include('PartialViews.navbar')
@include('PartialViews.gptfrontend.itemshead')

@foreach ($result as $r)

@include('PartialViews.gptfrontend.itemsbody',['id'=>$r['id'],'Model_ID'=>$r['Model_ID'],'p'=>$r['Price']??'novalue','Photo'=>$r['Photo']])


 @endforeach



