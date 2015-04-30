
<!-- Economic Loss-Inducing Factors related to the house construction - Page 7 -->

<form action="page7-backend.php" method="" onsubmit="return false;">


<p>5. Construction Details</p>
<p>5.1 Type of materials</p>
<p>You may select 0 or more.</p>
<input type="checkbox" name="_5-1[]" value="a" id='_5-1_a_-5'> Poor quality of sand<br>
<input type="checkbox" name="_5-1[]" value="b" id='_5-1_b_-5'> Poor quality aggregates<br>
<input type="checkbox" name="_5-1[]" value="c" id='_5-1_c_-5'> Poor quality cement<br>
<input type="checkbox" name="_5-1[]" value="d" id='_5-1_d_-5'> Poor quality bricks<br>

<p>5.2 Workmanship</p>
<p>You may select 0 or more.</p>
<input type="checkbox" name="_5-2[]" value="a" id='_5-2_a_-5'> Poor geometries of masonry and roof<br>
<input type="checkbox" name="_5-2[]" value="b" id='_5-2_b_-5'> Insufficient curing<br>

<p>5.3 Concrete Mix</p>
<p>You may select 0 or more.</p>
<input type="checkbox" name="_5-3[]" value="a" id='_5-3_a_-5'> Concrete prepared using nominal mix<br>
<input type="checkbox" name="_5-3[]" value="b" id='_5-3_b_-5'> Concrete Ingredients measured by volume batching<br>

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
