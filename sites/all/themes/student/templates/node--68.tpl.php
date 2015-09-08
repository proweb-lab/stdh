<div class="services clearfix">
   <?php print views_embed_view('services','block');?>
</div>
<div class="clearfix single-service-form">
    <form action="" id="cakeform" name="listForm" onsubmit="return false;">
        <div>
            <div class="cont_order">
                <fieldset>
                    <legend>خدمات متفرقة</legend>
                    <label>قائمة الخدمات</label><br>
                    <p id="noteprice">*ملاحظة العملة المتداولة في اسعار الخدمات بالدولار الامريكي فقط</p>
                    <label class='radiolabel'><input type="checkbox" name="choice" value="498.58" onchange="checkTotal()"/>تامين القبول الجامعي :
                        عمل مسح ضوئي للورق المطلوب وإرساله عبر الإيميل لمكتب تركيا للقيام بإجراءات تأمين القبول($498.58)</label><br>
                    <label class='radiolabel'><input type="checkbox" name="choice" value="21.37" onchange="checkTotal()"/>تأمين حجوزات الطيران :
                        مساعدة الطالب على حجز تذاكر سفر من خلال الاتفاق مع بعض المكاتب، ونقترح تعاون مع بتونيا للسفر أو الرفادة($21.37)</label><br>
                    <label class='radiolabel'><input type="checkbox" name="choice" value="85.47" onchange="checkTotal()"/>الاستقبال في المطار:
                        سيقوم مكتب تركيا بإرسال لمكتب عمان  باسم الشخص المستقبل ورقم هاتفه وصورته الشخصية ومكتب عمان سيقوم بإرسال هذه المعلومات إلى الطالب($85.47)</label><br>
                    <label class='radiolabel'><input type="checkbox" name="choice" value="42.74" onchange="checkTotal()"/>تأمين السكن الداخلي في الجامعة :
                        سيتم من خلال ورقة تقديم الطلب، ويعتمد على تاريخ تقديم الطلب($42.74)</label><br>
                    <label class='radiolabel'><input type="checkbox" name="choice" value="71.23" onchange="checkTotal()"/>محاضرة تعريفية عن دولة الدراسة في دولة الدراسة :
                        سيتم عقد محاضرة تعريفية في تركيا تحتوي على: طرق التنقل، الأماكن المهمة، أرقام مهمة لتواصل، المساعدة في شراء شريحة الهاتف، تعرف على قانون الدولة، طبيعة الحياة، تسليم الطالب بطاقة مواصلات($71.23)</label><br>
                    <label class='radiolabel'><input type="checkbox" name="choice" value="28.49" onchange="checkTotal()"/>المساعدة في التحضير لامتحانات القبول الجامعي من خلال إرشادهم إلى المراكز المعنية:
                        مساعدة الطالب على توجيه إلى المراكز المعتمدة للامتحان التوفل من خلال مكتب عمان، والعمل على توفير خصومات خاصة لهم من بعض المراكز اذا امكن($28.49)</label><br>
                    <label class='radiolabel'><input type="checkbox" name="choice" value="213.68" onchange="checkTotal()"/>تأمين السكن خارجي:
                        سيقوم مكتب تركيا بحجز غرفة لطالب، حيث سيتكفل طالب تكلفة السكن($213.68)</label><br>
                    <label class='radiolabel'><input type="checkbox" name="choice" value="142.45" onchange="checkTotal()"/> المساعدة في إصدار الإقامة:
                        تأمين الصحي تكلفته 600 ليرة وسيقوم الطالب بدفعه، تعبئة طلب الإقامة وتكلفتة 20 ليرة وسيتحملها المشروع، وزيارة الأمنيات - مركز الشرطة($142.45)</label><br>
                    <label class='radiolabel'><input type="checkbox" name="choice" value="99.72" onchange="checkTotal()"/>جولة سياحية :
                        مضيق البسفور ، زيارة مسجد السلطان الأحمد،مسجد الفاتح يلدز بارك بالإضافة إلى وجبة الغداء($99.72)</label><br>
                    <label class='radiolabel'><input type="checkbox" name="choice" value="213.68" onchange="checkTotal()"/>استكمال إجراءات التسجيل :
                        ترجمة أوراق الطالب من عند النوتر + التعليم العالي التركي($213.68)</label><br>
                    <label class='radiolabel'><input type="checkbox" name="choice" value="356.13" onchange="checkTotal()"/>دورة أساسية في اللغة التركية تعقد في تركيا :
                        عقد دورة لمدة 25 ساعة في أساسيات اللغة التركية($356.13)</label><br>
                    <label class='radiolabel'><input type="checkbox" name="choice" value="170.94" onchange="checkTotal()"/>المساعدة في استخراج الرقم الضريبي وفتح الحساب البنكي  :
                        تعبئة نموذج الرقم الضريبي، تسجيل الهاتف في تركيا وتكلفتة 135 ليرة ويقوم طالب بتحملها، فتح حساب بنكي يجب عمل إيداع بنكي($170.94)</label><br>
                    <label class='radiolabel'><input type="checkbox" name="choice" value="142.45" onchange="checkTotal()"/>رحلة ترفيهية وتعليمية خلال السنة الدراسية للطلبة  :
                        توب كابي، بانوراما فتح القسطنطينية، بالإضافة إلى وجبة الغداء($142.45)</label><br><br><br>
                    <div id="totalPrice"> السعر: <input type="text" size="2" id="txtResult"name="total" readonly="readonly" value="0"/></div>
                </fieldset>
            </div>

        </div>
    </form>
    </div>
<div class="btn btn-test-universities btn-lg"> <?php  $link_test = l(t('Apply and Order service'),
                    'upload-files',array('html' => TRUE, 'attributes' =>
                        array('target' => '_blank')));
                echo $link_test;?>
</div>