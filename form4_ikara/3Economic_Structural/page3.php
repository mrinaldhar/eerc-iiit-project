
<!-- Economic Loss-Inducing Factors related to the house construction - Page 3 -->

<form action="page3-backend.php" method="" onsubmit="return false;">


<p>4. Structural Aspects</p>
<p>4.1 Vertical posts</p>
<p>You may select 0 or more </p>
<input type="checkbox" name="_4-1[]" value="a" id='_4-1_a_-5'> Vertical posts far seperated.
<input type="checkbox" name="_4-1[]" value="b" id='_4-1_b_-5'> Laps in vertical posts.
<input type="checkbox" name="_4-1[]" value="c" id='_4-1_c_-5'> Non-uniform spacing of posts in either/both directions in plan.
<input type="checkbox" name="_4-1[]" value="d" id='_4-1_d_-5'> No diagonal braces to posts in vertical plane along one wall in any one direction in plan.
<input type="checkbox" name="_4-1[]" value="e" id='_4-1_e_-5'> No diagonal braces to posts in the vertical plane along both walls in any one or both directions.

<p>4.2 Roof Design</p>
<p>You may select 0 or more </p>
<input type="checkbox" name="_4-2[]" value="a" id='_4-2_a_-5'>  Heavy roof .
<input type="checkbox" name="_4-2[]" value="b" id='_4-2_b_-5'> Split level roof .
<input type="checkbox" name="_4-2[]" value="c" id='_4-2_c_-5'> No band at eaves level .
<input type="checkbox" name="_4-2[]" value="d" id='_4-2_d_-5'> No bottom chord in roof truss.

<p>4.3 Post-wall panel connection</p>
<p>You may select 0 or more.</p>
<input type="checkbox" name="_4-3[]" value="a" id='_4-3_a_-5'> No/poor connection between wall panel and vertical posts .
<br>

<p>4.4 Wall to roof/floor connection </p>
<p>You may select 0 or more.</p>
<input type="checkbox" name="_4-4[]" value="a" id='_4-4_a_-5'> Roof truss not connected to the vertical posts<br>

<p>4.5 Staircase</p>
<input type="radio" name="_4-5" value="a" id='_4-5_a_-5'> Unsymmetrically in plan location but integrally built within the house .
<input type="radio" name="_4-5" value="b" id='_4-5_b_-5'> Inadequately seperated from the house .
<input type="radio" name="_4-5" value="c" id='_4-5_c_-5' checked> None fo these.


<br>
<button onclick="window.openTab(4)">Next page</button>
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