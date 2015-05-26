
<!-- Economic Loss-Inducing Factors related to the house construction - Page 6 -->

<form action="page6-backend.php" method="" onsubmit="return false;">

<p>4. Structural Aspects</p>
<p>4.4 Wall-wall connection</p>
<p>You may select 0 or more.</p>
<input type="checkbox" name="_4-4[]" value="a" id='_4-4_a_-5'> No roof band with pitched roof
<input type="checkbox" name="_4-4[]" value="b" id='_4-4_b_-5'> No lintel band
<input type="checkbox" name="_4-4[]" value="c" id='_4-4_c_-5'> No sill band
<input type="checkbox" name="_4-4[]" value="d" id='_4-4_d_-5'> No plinth bands

<p>4.5 Wall to roof/floor connection</p>
<p>You may select 0 or more.</p>
<input type="checkbox" name="_4-5[]" value="a" id='_4-5_a_-5'> No/insufficient anchorage of vertical reinforcement from walls to roof/floor

<p>4.6 Staircase</p>
<p>You may select 0 or more.</p>
<input type="checkbox" name="_4-6[]" value="a" id='_4-6_a_-5'> Unsymmetrical location
<input type="checkbox" name="_4-6[]" value="b" id='_4-6_b_-5'> Both top and bottom of staircase integrally built into the building frame
<input type="checkbox" name="_4-6[]" value="c" id='_4-6_c_-5'> Staircase not adequately separated from the house

<br>
<button onclick="window.openTab(7)">Next page</button>
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
