<form action="page1-backend.php" method="" onsubmit="return false;">

<!-- 5 -->
<p>5. Construction Details</p>
<p>5.1 Type and Quality of materials</p>
<p>You may select 0 or more.</p>
<input type="checkbox" name="_5-1[]" value="a" id='_5-1_a_-5'> Poor compressive strength of masonry units
<input type="checkbox" name="_5-1[]" value="b" id='_5-1_b_-5'> Large size masonry units (>300m length)
<input type="checkbox" name="_5-1[]" value="c" id='_5-1_c_-5'> Corrosion of steel bars

<p>5.2 Workmanship</p>
<p>You may select 0 or more.</p>
<input type="checkbox" name="_5-2[]" value="a" id='_5-2_a_-5'> Poor geometries of masonry and roof
<input type="checkbox" name="_5-2[]" value="b" id='_5-2_b_-5'> Informal procedures adopted in construction

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