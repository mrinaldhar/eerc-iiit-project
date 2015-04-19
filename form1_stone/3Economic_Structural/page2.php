<!DOCTYPE html>
<!--Economic Loss-Inducing Factors related to the Structural Elements - Page 2 -->
<form action= "form-1-backend.php" method="" onsubmit="return false;">

    <p>3. Architectural Features</p>

    <p>3.1 Plan shape</p>
    <p>You may select 0 or more.</p>
    <input type="checkbox" name="_3-1[]" value='a' id='_3-1_a_-5'/>Large room sizes<br/>'
    <input type="checkbox" name="_3-1[]" value='b' id='_3-1_b_-3'/>Irregular orientation of rooms<br/>'
    <input type="checkbox" name="_3-1[]" value='c' id='_3-1_c_-5'/>Complex overall shape including those with re-entrant corners<br/>'

    <p>3.2 Elevation profile</p>
    <p>You may select 0 or more.</p>
    <input type="checkbox" name="_3-2[]" value='a' id='_3-2_a_-5'/>Wider top and narrower bottom<br/>'
    <input type="checkbox" name="_3-2[]" value='b' id='_3-2_b_-5'/>Heavier top<br/>'
    <input type="checkbox" name="_3-2[]" value='c' id='_3-2_c_-3'/>Large projections or overhangs<br/>'
    <input type="checkbox" name="_3-2[]" value='d' id='_3-2_d_-5'/>Split roof<br/>'
    <input type="checkbox" name="_3-2[]" value='e' id='_3-2_e_-5'/>Large storey heights<br/>'
    <input type="checkbox" name="_3-2[]" value='f' id='_3-2_f_-5'/>Differences in storey heights<br/>'
    <input type="checkbox" name="_3-2[]" value='g' id='_3-2_g_-5'/>Unsymmetrical staircase location with respect to plan<br/>'

    <p>3.3 Door and window openings in walls</p>
    <p>You may select 0 or more.</p>
    <input type="checkbox" name="_3-3[]" value='a' id='_3-3_a_-1'/>Rare single window close to corners<br/>'
    <input type="checkbox" name="_3-3[]" value='b' id='_3-3_b_-2'/>About half of openings close to corners<br/>'
    <input type="checkbox" name="_3-3[]" value='c' id='_3-3_c_-4'/>Almost all openings close to corners<br/>'
    <input type="checkbox" name="_3-3[]" value='d' id='_3-3_d_-4'/>Large window openings<br/>'
    <input type="checkbox" name="_3-3[]" value='e' id='_3-3_e_-6'/>Large door openings<br/>'

    <p>3.4 Distance from adjacent building</p>
    <input type="radio" name="_3-4" value='a' id='_3-4_a_-3'/>Houses touch each other<br/>'
    <input type="radio" name="_3-4" value='b' id='_3-4_b_-3'/>Houses have small gap between them<br/>'
    <input type="radio" name="_3-4" value='c' id='_3-4_c_0' checked/>None of these<br/>'


    <p>3.5 Parapets, objects on roof or projections</p>
    <p>You may select 0 or more.</p>
    <input type="checkbox" name="_3-5[]" value='a' id='_3-5_a_-4'/>Not secured to the structural system<br/>'
    <input type="checkbox" name="_3-5[]" value='b' id='_3-5_b_-4'/>Large and heavy projections and overhangs<br/>'

    <p>3.6 Door and window openings in walls</p>
    <p>You may select 0 or more.</p>
    <input type="checkbox" name="_3-6[]" value='a' id='_3-6_a_-1'/>Narrow<br/>'
    <input type="checkbox" name="_3-6[]" value='b' id='_3-6_b_-1'/>Too few in number<br/>'
    <input type="checkbox" name="_3-6[]" value='c' id='_3-6_c_-1'/>Too far to reach<br/>'
    <input type="checkbox" name="_3-6[]" value='d' id='_3-6_d_-1'/>Poorly constructed<br/>'

    <p>3.7 Water Tanks on flat roof</p>
    <p>You may select 0 or more.</p>
    <input type="checkbox" name="_3-7[]" value='a' id='_3-7_a_-1'/>Large in size<br/>'
    <input type="checkbox" name="_3-7[]" value='b' id='_3-7_b_-1'/>Provided in the middle of the rooms<br/>'
    <input type="checkbox" name="_3-7[]" value='c' id='_3-7_c_-1'/>Not anchored to the roof<br/>'

    <p>3.8 Number of storeys</p>
    <input type="radio" name="_3-8" value='a' id='_3-8_a_-10'/>3 storeys<br/>'
    <input type="radio" name="_3-8" value='b' id='_3-8_b_-25'/>4 storey or more<br/>'
    <input type="radio" name="_3-8" value='c' id='_3-8_c_0' checked/>None of these'


    <br/>
    <button onclick="window.openTab(3)">Next page</button>
</form>

<script>
$('input').click(function() {

    console.log('hi');    
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