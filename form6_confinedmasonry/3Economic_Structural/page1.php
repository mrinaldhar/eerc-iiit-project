<!-- Confined Masonry House -->
<!-- Economic Loss-Inducing Factors related to the Structural Elements -->

<form action="page1-backend.php" method="" onsubmit="return false;">

<!-- 1 -->
<p>1. Siting Issues</p>

<p>1.1 Slope of the ground</p>
<p>You may select 0 or more.</p>
<input type="checkbox" name="_1-1[]" value="a" id='_1-1_a_-5'>The house is built on sloped ground 
<input type="checkbox" name="_1-1[]" value="b" id='_1-1_b_-5'>The house is located adjacent to a water body

<!-- 2 -->
<p>2. Soil and Foundation Conditions</p>

<p>2.1 Suitability of soil type</p>
<input type="radio" name="_2-1" value="a" id='_2-1_a_-5'> Soft soil
<input type="radio" name="_2-1" value="b" id='_2-1_b_-5'> Weak soil
<input type="radio" name="_2-1" value="c" id='_2-1_c_-5'> High water table
<input type="radio" name="_2-1" value="d" id='_2-1_d_-5'> Soil with moisture
<input type="radio" name="_2-1" value="e" id='_2-1_e_-5' checked> None of the Above

<p>2.2 Foundation</p>
<p>You may select 0 or more.</p>
<input type="checkbox" name="_2-2[]" value="a" id='_2-2_a_-5'> Strip foundation on non-uniform base
<input type="checkbox" name="_2-2[]" value="b" id='_2-2_b_-5'> Strip foundation at or within 300 mm from ground level

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













