<div id="wrap">
    <form action="" id="cakeform" name="listForm" onsubmit="return false;">
        <div>
            <div class="cont_order">
                <fieldset>
                    <legend>خدمات متفرقة</legend>
                    <label >قائمة الخدمات</label>
                    <label class='radiolabel'><input type="checkbox" name="choice" value="25" onchange="checkTotal()"/>الاستقبال في المطار ($25)</label><br/>
                    <label class='radiolabel'><input type="checkbox" name="choice" value="25" onchange="checkTotal()"/>تامين السكن ($25)</label><br/>
                    <label class='radiolabel'><input type="checkbox" name="choice" value="25" onchange="checkTotal()"/>تامين قبول ($25)</label><br/>
                    <label class='radiolabel'><input type="checkbox" name="choice" value="25" onchange="checkTotal()"/>تامينرخصة قيادة ($25)</label><br/>
                    <br/>

                    <div id="totalPrice"> Total: <input type="text" size="2" name="total" value="0"/></div>

                </fieldset>
            </div>

        </div>
    </form>