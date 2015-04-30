
<!-- Economic Loss-Inducing Factors related to the house construction - Page 1 -->

<form action="page1-backend.php" method="" onsubmit="return false;">


<p>1. Siting Issues</p>
<p>1.1 Slope of the ground</p>
<input type="radio" name="_1-1" value="a" id='_1-1_a_-5'>The building is built on sloped ground with access at two or more levels, i.e., at ground, intermediate floor and roof.
<input type="radio" name="_1-1" value="b" id='_1-1_b_-5'>House is connected to slope and there is no gap between building and natural slope of site.
<input type="radio" name="_1-1" value="c" id='_1-1_c_-5' checked> None of these.

<p>2. Soil and Foundation Conditions</p>
<p>2.1 Suitability of soil type</p>
<input type="radio" name="_2-1" value="a" id='_2-1_a_-5'> Soft soil
<input type="radio" name="_2-1" value="b" id='_2-1_b_-5'> Weak soil
<input type="radio" name="_2-1" value="c" id='_2-1_c_-5'> High water table
<input type="radio" name="_2-1" value="d" id='_2-1_d_-5'> Soil with moisture
<input type="radio" name="_2-1" value="e" id='_2-1_e_-5' checked> None of these.

<p>2.2 Foundation</p>
<p>You may select 0 or more.</p>
<input type="checkbox" name="_2-2[]" value="a" id='_2-2_a_-5'> Strip foundation on non-uniform base.
<input type="checkbox" name="_2-2[]" value="b" id='_2-2_b_-5'> Strip foundation with no through stones.
<input type="checkbox" name="_2-2[]" value="c" id='_2-2_c_-5'> Strip foundation on soft soil.
<input type="checkbox" name="_2-2[]" value="d" id='_2-2_d_-5'> Discontinuous RC foundation beam system.
<input type="checkbox" name="_2-2[]" value="e" id='_2-2_e_-5'> Continuous RC foundation beam system on soft soil.

<br>
<button onclick="window.openTab(2)">Next page</button>
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