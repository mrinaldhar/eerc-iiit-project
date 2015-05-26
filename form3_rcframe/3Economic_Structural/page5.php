
<!-- Economic Loss-Inducing Factors related to the house construction - Page 5 -->

<form action="page5-backend.php" method="" onsubmit="return false;">


<p>4. Structural Aspects</p>
<p>4.1 Frame Grid</p>
<p>4.1.1 Uniform grid in both plan directions</p>
<input type="radio" name="_4-1-1" value="a" id='_4-1_a_-5'> Grid of parallel planar frames only along one plan direction.
<input type="radio" name="_4-1-1" value="b" id='_4-1_b_-5'> No grid of parallel planar frames along both plan directions.
<input type="radio" name="_4-1-1" value="c" id='_4-1_c_-5' checked> None of the Above

<p>4.1.2 Symmetric lateral stiffness along both plan directions</p>
<input type="radio" name="_4-1-2" value="a" id='_4-1_d_-5'> Frames have symmetrical lateral stiffness along one plan direction.
<input type="radio" name="_4-1-2" value="b" id='_4-1_e_-5'> Frames don't have symmetrical lateral stiffness along any plan direction.
<input type="radio" name="_4-1-2" value="c" id='_4-1_f_-5' checked> None of the Above

<p>4.1.3 Symmetric lateral strength along both plan directions</p>
<input type="radio" name="_4-1-3" value="a" id='_4-1_g_-5'> Frames have symmetric lateral strength along one plan direction.
<input type="radio" name="_4-1-3" value="b" id='_4-1_h_-5'> Frames don't have symmetric lateral strength along any plan direction.
<input type="radio" name="_4-1-3" value="c" id='_4-1_i_-5' checked> None of the Above




<p>4.2 Roof/Floor slab design</p>
<p>You may select 0 or more.</p>
<input type="checkbox" name="_4-2[]" value="a" id='_4-2_a_-5'> Heavy roof<br>
<input type="checkbox" name="_4-2[]" value="b" id='_4-2_b_-5'> Pitched roof<br>
<input type="checkbox" name="_4-2[]" value="c" id='_4-2_c_-5'> Split roof<br>
<input type="checkbox" name="_4-2[]" value="d" id='_4-2_d_-5'> Roof with large size openings, especially located along the edge of the slab.<br>

<p>4.3 Roof/Floor Column connection</p>
<p>You may select 0 or more.</p>
<input type="checkbox" name="_4-3[]" value="a" id='_4-3_a_-5'> No anchorage of horizontal reinforcement from beams to columns at roof/floor levels<br>



<br>
<button onclick="window.openTab(6)">Next page</button>
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

