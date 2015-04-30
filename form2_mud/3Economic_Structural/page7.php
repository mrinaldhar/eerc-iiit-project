
<!-- Economic Loss-Inducing Factors related to the house construction - Page 7 -->

<form action="page7-backend.php" method="" onsubmit="return false;">


<p>5. Construction Detailss</p>
<p>5.1 Type and Quality of walls</p>
<p>You may select 0 or more.</p>
<input type="checkbox" name="_5-1[]" value="a" id='_5-1_a_-5'> Unreinforced mud walls
<input type="checkbox" name="_5-1[]" value="b" id='_5-1_b_-5'> Low, untreated quality wood used

<p>5.2 Workmanship</p>
<p>You may select 0 or more.</p>
<input type="checkbox" name="_5-2[]" value="a" id='_5-2_a_-5'> Poor geometries of masonry and roof
<input type="checkbox" name="_5-2[]" value="b" id='_5-2_b_-5'> Poor quality of materials
<input type="checkbox" name="_5-2[]" value="c" id='_5-2_c_-5'> Informal procedures adopted in construction

<br>
<button onclick="show()">Show</button>
</form>

<script>
$('input').click(function() {  
    section = this.name.split('-')[0].split('_')[1]
    console.log("section"+section);
        scores[section] += parseInt(this.id.split('_')[3]);
    console.log("score"+this.id.split('_')[3]);
      if (scores[section] <= formvals[page_loaded][section]) {
        scores[section] = formvals[page_loaded][section];
    }
    console.log(scores);
});
</script>
