<!-- Burnt Clay Brick Masonry House -->
<!-- Economic Loss-Inducing Factors related to the Structural Elements -->

<form action="page1-backend.php" method="" onsubmit="return false;">

<!-- 5 -->
<p>5. Construction Details</p>
<p>5.1 Type of materials</p>
<p>You may select 0 or more.</p>
<input type="checkbox" name="_5-1[]" value="a" id='_5-1_a_-5'> Poor quality of materials

<p>5.2 Workmanship</p>
<p>You may select 0 or more.</p>
<input type="checkbox" name="_5-2[]" value="a" id='_5-2_a_-5'> Poor geometries of masonry and roof
<input type="checkbox" name="_5-2[]" value="b" id='_5-2_b_-5'> Insufficient curing
<input type="checkbox" name="_5-2[]" value="c" id='_5-2_c_-5'> Adhoc procedures of construction

<p>5.3 Concrete mix</p>
<p>You may select 0 or more.</p>
<input type="checkbox" name="_5-3[]" value="a" id='_5-3_a_-5'> Concrete prepared using nominal mix
<input type="checkbox" name="_5-3[]" value="b" id='_5-3_b_-5'> Concrete ingredients measured by volume batching

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