<?php defined("EXEC") or die("Direct Access Denied."); ?>
<div class="section-heading">بخش اول: اطلاعات فردی</div>
<table width=100% class="INFORMA HTR">
	<tr>
		<td width=20%  class="quest">کد ملی:</td>
		<td><input type="text" name="informa[nid]" readonly require="true" minlength="10" maxlength="10"  class="ltr" /></td>
		<td width=20%  class="quest">شماره دانشجویی:</td>
		<td><input type="text" name="informa[stdid]" readonly  class="ltr" /></td>
	</tr>
	<tr>
		<td class="quest">نام و نام خانوادگی:</td>
		<td><input type="text" name="informa[name]" readonly require="true" /></td>
		<td class="quest">نام پدر:</td>
		<td><input type="text" name="informa[fname]"  readonly id="field_iid" /></td>
	</tr>
	<tr>
		<td class="quest">سن:</td>
		<td><input type="text" cast="int" size="3" id="age" maxlength="3"  require="true" name="informa[age]" class="ltr center" onkeyup="calculateBirth()" /></td>
		<td class="quest">تاریخ تولد:</td>
		<td><input type="text" name="informa[birth_year]" cast="int"  size="4" id="birth_year" maxlength="4" require="true"  onkeyup="calculateAge()" class="ltr center"  /></td>		
	</tr>
	<tr>
		<td class="quest">جنسیت:</td>
		<td>
			<label class="option">مرد</label><input type="radio" value="1" readonly name="informa[gender]" />
			<label class="option">زن</label><input type="radio" value="2" readonly name="informa[gender]" />
		</td>		
		<td class="quest">رشته تحصیلی:</td>
		<td><input type="text" require="true" name="informa[field]" readonly  /></td>		
	</tr>
	<tr>
		<td class="quest">وضعیت تاهل:</td>
		<td>
			<label class="option">مجرد</label><input type="radio" value="1" name="informa[married]" />
			<label class="option">متاهل</label><input type="radio" value="2" name="informa[married]" />
		</td>
		<td class="quest">دین:</td>
		<td>
			<label class="option">اسلام</label><input type="radio" value="1" name="informa[religion]" />
			<label class="option">مسیحی</label><input type="radio" value="2" name="informa[religion]" />
			<label class="option">یهودی</label><input type="radio" value="3" name="informa[religion]" />
			<label class="option">سایر</label><input type="radio" value="4" name="informa[religion]" />
		</td>
	</tr>

	<tr>
		<td class="quest">شهر محل سکونت:</td>
		<td><input type="text" require="true" name="informa[city]"/></td>
		<td class="quest">تابعیت:</td>
		<td><input type="text" value="ایرانی" require="true" name="informa[nationality]"/></td>
	</tr>
	<tr>
		<td class="quest">چندمین فرزند خانواده هستید:</td>
		<td><input type="text" require="true" cast="int" size=4 maxlength=2 class="ltr center" name="informa[nth_child]"/></td>
		<td class="quest">آیا پدر و مادرتان باهم زندگی می کنند؟</td>
		<td>
			<label class="option">بلی</label><input type="radio" value="1" name="informa[parents_apart]" />
			<label class="option">خیر</label><input type="radio" value="2" name="informa[parents_apart]" />		
		</td>
	</tr>
	<tr>
		<td class="quest">آیا پدر و مادرتان از هم جدا شده اند؟</td>
		<td>
			<label class="option">بلی</label><input type="radio" value="1" name="informa[parents_divorce]" />
			<label class="option">خیر</label><input type="radio" value="2" name="informa[parents_divorce]" />		
		</td>
	</tr>
	<tr>
		<td class="quest">پدرتان در قید حیات است؟</td>
		<td>
			<label class="option">بلی</label><input type="radio" value="1" name="informa[father_alive]" />
			<label class="option">خیر</label><input type="radio" value="2" name="informa[father_alive]" />		
		</td>
		<td class="quest">مادرتان در قید حیات است؟</td>
		<td>
			<label class="option">بلی</label><input type="radio" value="1" name="informa[mother_alive]" />
			<label class="option">خیر</label><input type="radio" value="2" name="informa[mother_alive]" />		
		</td>
	</tr>
	<tr>
		<td class="quest">محل سکونت فعلی</td>
		<td>
			<label class="option">خوابگاه</label><input type="radio" value="1" tp="current_place" name="informa[current_place]" />
			<label class="option">منزل دانشجویی</label><input type="radio" tp="current_place" value="2" name="informa[current_place]" />	
			<label class="option">منزل والدین</label><input type="radio" tp="current_place" value="3" name="informa[current_place]" />				
		</td>
		<td class="quest">نام خوابگاه محل سکونت - شماره اتاق</td>
		<td>
			<input type="text" name="informa[dorm]"  id="dorm" />
			-
			<input type="text" name="informa[room]"  size=4 id="room" />
		</td>
	</tr>
	<tr>
		<td class="quest">تعداد نفرات ساکن در اتاق:</td>
		<td><input type="text" cast="int" name="informa[co_room]" size=4 maxlength=2  id="co_room" /></td>
		<td class="quest">آیا همه دانشجویان ساکن در اتاق هم رشته شما هستند؟</td>
		<td>
			<label class="option">بلی</label><input type="radio" value="1" name="informa[same_field]" />	
			<label class="option">خیر</label><input type="radio" value="2" name="informa[same_field]" />				
		</td>
	</tr>
	<tr>
		<td class="quest">دانشجویان ساکن در اتاق از نظر ترم تحصیلی از شما بالاتر هستند؟</td>
		<td>
			<label class="option">بلی</label><input type="radio" value="1" name="informa[higher_term]" />	
			<label class="option">خیر</label><input type="radio" value="2" name="informa[higher_term]" />		
		</td>
		<td class="quest">تعداد دفعات مراجعت به محل سکونت خانواده:</td>
		<td>
			<label class="option">آخر هر هفته</label><input type="radio" value="1" name="informa[return_home]" />	
			<label class="option">یک هفته درمیان</label><input type="radio" value="2" name="informa[return_home]" />	
			<label class="option">یک ماهه</label><input type="radio" value="3" name="informa[return_home]" />	
			<label class="option">پایان ترم</label><input type="radio" value="4" name="informa[return_home]" />	
		</td>
	</tr>
</table>
<div class="section-heading">اطلاعات تحصیلی</div>
<table width=100% class="INFORMA HTR">
	<tr>
		<td class="quest">رشته تحصیلی دبیرستان:</td>
		<td>
			<label class="option">ریاضی</label><input type="radio" value="1" name="education[highschool_field]" />	
			<label class="option">تجربی</label><input type="radio" value="2" name="education[highschool_field]" />	
			<label class="option">انسانی</label><input type="radio" value="3" name="education[highschool_field]" />	
			<label class="option">فنی</label><input type="radio" value="4" name="education[highschool_field]" />	
			<label class="option">کار و دانش</label><input type="radio" value="5" name="education[highschool_field]" />				
		</td>
		<td class="quest">دبیرستان محل تحصیل:</td>
		<td><input type="text" name="education[highschool]" id="highschool" /></td>
	</tr>
	<tr>
		<td class="quest">سال فارغ التحصیلی دبیرستان:</td>
		<td><input type="text" name="education[highschool_graduate]" cast="int" id="highschool_graduate" size=6 maxlength=4 minlength=4 /></td>
		<td class="quest">سال ورود به دانشگاه:</td>
		<td><input type="text" name="education[university_entrance]" cast="int" id="university_entrance" size=6 maxlength=4 minlength=4  /></td>
	</tr>
	<tr>
		<td class="quest">معدل دیپلم:</td>
		<td><input type="text" name="education[diploma]" cast="float" id="diploma" size=6 min=0 max=20  /></td>
		<td class="quest">رتبه کنکور - سهمیه کنکور</td>
		<td><input type="text" name="education[score]" size=6  id="score" />-<input type="text" size=6  name="education[ration]" id="ration" /></td>
	</tr>
	<tr>
		<td class="quest">آیا دانشجوی انتقالی یا مهمان هستید؟</td>
		<td>
			<label class="option">بلی</label><input type="radio" value="1" name="education[guest]" />	
			<label class="option">خیر</label><input type="radio" value="2" name="education[guest]" />	
		</td>
		<td class="quest">دانشگاه مبدا</td>
		<td><input type="text" name="education[first_place]" id="first_place" /></td>
	</tr>
	<tr>
		<td class="quest">آیا با رشته تحصیلی خود آشنایی دارید؟</td>
		<td>
			<label class="option">بلی</label><input type="radio" value="1" name="education[know_field]" />	
			<label class="option">خیر</label><input type="radio" value="2" name="education[know_field]" />	
		</td>
		<td class="quest">به رشته تحصیلی خود علاقه مند هستید؟</td>
		<td>
			<label class="option">بلی</label><input type="radio" value="1" name="education[like_filed]" />	
			<label class="option">خیر</label><input type="radio" value="2" name="education[like_filed]" />	
		</td>
	</tr>
	<tr>
		<td class="quest">رشته قبولی الویت چندم شما بوده است؟</td>
		<td><input type="text" name="education[filed_piority]" id="filed_piority" size="4" maxlength="3" /></td>
		<td class="quest">آیا کسی از آشنایان شما در این رشته تحصیل کرده است؟</td>
		<td>
			<label class="option">بلی</label><input type="radio" value="1" name="education[related_studied_field]" />	
			<label class="option">خیر</label><input type="radio" value="2" name="education[related_studied_field]" />	
		</td>
	</tr>
	<tr>
		<td class="quest">مایل به ادامه تحصیل هستید؟</td>
		<td>
			<label class="option">بلی</label><input type="radio" value="1" name="education[continue_study]" />	
			<label class="option">خیر</label><input type="radio" value="2" name="education[continue_study]" />	
		</td>
		<td class="quest">در چه رشته ای؟</td>
		<td><input type="text" name="education[continue_study_field]" id="continue_study_field" /></td>
	</tr>
	<tr>
		<td class="quest">بعد از پایان تحصیل مایل به کار در چه شهری هستید؟</td>
		<td>
			<input type="text" name="education[like_work_in]" id="like_work_in" />
		</td>
		<td class="quest">چه ساعاتی در روز را جهت درس خواندن اختصاص می دهید؟</td>
		<td>
			<label class="option">اوایل صبح</label><input type="radio" value="1" name="education[study_hours]" />	
			<label class="option">نیمه روز</label><input type="radio" value="2" name="education[study_hours]" />	
			<label class="option">شب تا دیروقت</label><input type="radio" value="3" name="education[study_hours]" />	
		</td>
	</tr>
	<tr>
		<td class="quest">از 1 تا 10 میزان آشنایی با رایانه:</td>
		<td>
			<input type="text" name="education[know_computer]" cast="int" min="1" max="10" id="know_computer" size=4  />
		</td>
		<td class="quest">از 1 تا 10 میزان آشنایی شما با زبان انگلیسی:</td>
		<td>
			<input type="text" name="education[know_english]" cast="int" min="1" max="10" id="know_english" size=4 />
		</td>
	</tr>
</table>
<div class="section-heading">اطلاعات جسمی و روحی</div>
<table width=100% class="INFORMA HTR">
	<tr>
		<td width=30%  class="quest">وزن:</td>
		<td><input type="text" cast="int" size="4" class="ltr center" maxlength="3" name="medical[weight]" /></td>
		<td width=30%  class="quest">قد:</td>
		<td><input type="text" cast="int" size="4" class="ltr center" maxlength="3" name="medical[height]" /></td>
	</tr>
	<tr>
		<td class="quest">BP:</td>
		<td><input type="text" name="medical[bp]" id="bp" size="34" maxlength="3" /></td>
		<td class="quest">گروه خونی:</td>
		<td><input type="text" name="medical[blood_group]" class="ltr center" id="blood_group" size="4" maxlength="3"/></td>
	</tr>
	<tr>
		<td class="quest">TG:</td>
		<td><input type="text" name="medical[tg]" id="tg" class="ltr center" size="4" maxlength="3" /></td>
		<td class="quest">Chol:</td>
		<td><input type="text" name="medical[chol]" id="chol" class="ltr center" size="4" maxlength="3" /></td>
	</tr>
	<tr>
		<td class="quest">سطح کورتیزول:</td>
		<td><input type="text" name="medical[cortisol]" class="ltr center" id="cortisol" size="4" maxlength="3" /></td>
		<td class="quest">تیروئید</td>
		<td><input type="text" name="medical[thyroid]" class="ltr center" id="thyroid" size="4" maxlength="3" /></td>
	</tr>
	<tr>
		<td class="quest">Hb:</td>
		<td><input type="text" name="medical[hb]" id="hb" class="ltr center" size="4" maxlength="3"/></td>
		<td class="quest">FBS:</td>
		<td><input type="text" name="medical[fbs]" id="fbs" class="ltr center" size="4" maxlength="3"/></td>
	</tr>
	<tr>
		<td class="quest">دورکمر:</td>
		<td><input type="text" name="medical[waistcircumference]" class="ltr center" id="waistcircumference" size="4" maxlength="3"  /></td>
		<td class="quest">دور باسن:</td>
		<td><input type="text" name="medical[hipcircumference]" class="ltr center" id="hipcircumference" size="4" maxlength="3" /></td>
	</tr>
	<tr>
		<td class="quest">تعداد دفعات استفاده از غذای سلف سرویس دانشگاه در هفته:</td>
		<td>
			<label class="option">چهار روز یا بیشتر</label><input type="radio" value="1" name="medical[university_food]" />	
			<label class="option">سه روز یا کمتر</label><input type="radio" value="2" name="medical[university_food]" />	
			<label class="option">اصلا استفاده نمی کنم</label><input type="radio" value="3" name="medical[university_food]" />	
		</td>
		<td class="quest">آیا در دوران کودکی از شیر مادر استفاده کرده اید:</td>
		<td><label class="option">بلی</label><input type="radio" value="1" name="medical[mother_milk]" />	
			<label class="option">خیر</label><input type="radio" value="2" name="medical[mother_milk]" />	
			<label class="option">اطلاع ندارم</label><input type="radio" value="3" name="medical[mother_milk]" />
		</td>
	</tr>
</table>
<div class="section-heading">اطلاعات علائق و سرگرمی:</div>
<table width=100% class="INFORMA HTR">
	<tr>
		<td width=20%></td>
		<td width=15%></td>
		<td width=10%>چند روز در هفته</td>
		<td width=10%>چند ساعت در روز</td>
		<td width=15%>مدرک، رتبه یا گواهینامه</td>
		<td width=30%></td>
	</tr>
	<tr>
		<td>ورزش حرفه ای</td>
		<td>
			<label class="option">بلی</label><input type="radio" value="1" name="habits[pro_sport]" />	
			<label class="option">خیر</label><input type="radio" value="2" name="habits[pro_sport]" />
		</td>
		<td><input type="text" name="habits[pro_sport_weekly]" class="ltr center" id="pro_sport_weekly" size=4 /></td>
		<td><input type="text" name="habits[pro_sport_daily]" class="ltr center" id="pro_sport_daily"  size=4 /></td>
		<td>
			<label class="option">بلی</label><input type="radio" value="1" name="habits[pro_sport_cert]" />	
			<label class="option">خیر</label><input type="radio" value="2" name="habits[pro_sport_cert]" />
		</td>
		<td>نام ورزش:<input type="text" name="habits[pro_sport_name]" id="" size=12 /></td>
	</tr>
	<tr>
		<td>ورزش تفریحی</td>
		<td>
			<label class="option">بلی</label><input type="radio" value="1" name="habits[rec_sport]" />	
			<label class="option">خیر</label><input type="radio" value="2" name="habits[rec_sport]" />
		</td>
		<td><input type="text" name="habits[rec_sport_weekly]" class="ltr center" id="" size=4 /></td>
		<td><input type="text" name="habits[rec_sport_daily]" class="ltr center" id=""  size=4 /></td>
		<td>
			<label class="option">بلی</label><input type="radio" value="1" name="habits[rec_sport_cert]" />	
			<label class="option">خیر</label><input type="radio" value="2" name="habits[rec_sport_cert]" />
		</td>
		<td>نام ورزش:<input type="text" name="habits[rec_sport_name]" id="rec_sport_name" size=12 /></td>
	</tr>
	<tr>
		<td>کوهنوردی</td>
		<td>
			<label class="option">بلی</label><input type="radio" value="1" name="habits[climbing]" />	
			<label class="option">خیر</label><input type="radio" value="2" name="habits[climbing]" />
		</td>
		<td><input type="text" name="habits[climbing_weekly]" class="ltr center" id="" size=4 /></td>
		<td><input type="text" name="habits[climbing_daily]" class="ltr center" id=""  size=4 /></td>
		<td>
			<label class="option">بلی</label><input type="radio" value="1" name="habits[climbing_cert]" />	
			<label class="option">خیر</label><input type="radio" value="2" name="habits[climbing_cert]" />
		</td>
		<td></td>
	</tr>
	<tr>
		<td>پیاده روی</td>
		<td>
			<label class="option">بلی</label><input type="radio" value="1"  name="habits[walking]" />	
			<label class="option">خیر</label><input type="radio" value="2" name="habits[walking]" />
		</td>
		<td><input type="text" name="habits[walking_weekly]" class="ltr center" size=4 /></td>
		<td><input type="text" name="habits[walking_daily]" class="ltr center"  size=4 /></td>
	</tr>
	<tr>
		<td>مطالعه کتاب و مجلات غیر درسی</td>
		<td>
			<label class="option">بلی</label><input type="radio" value="1" name="habits[reading]" />	
			<label class="option">خیر</label><input type="radio" value="2" name="habits[reading]" />
		</td>
		<td><input type="text" name="habits[reading_weekly]" class="ltr center" size=4 /></td>
		<td><input type="text" name="habits[reading_daily]" class="ltr center"  size=4 /></td>
	</tr>
	<tr>
		<td>نقاشی</td>
		<td>
			<label class="option">بلی</label><input type="radio" value="1" name="habits[painting]" />	
			<label class="option">خیر</label><input type="radio" value="2" name="habits[painting]" />
		</td>
		<td><input type="text" name="habits[painting_weekly]" class="ltr center"  size=4 /></td>
		<td><input type="text" name="habits[painting_daily]" class="ltr center"   size=4 /></td>
	</tr>
	<tr>
		<td>خوش نویس</td>
		<td>
			<label class="option">بلی</label><input type="radio" value="1" name="habits[calligraphy]" />	
			<label class="option">خیر</label><input type="radio" value="2" name="habits[calligraphy]" />
		</td>
		<td><input type="text" name="habits[calligraphy_daily]" class="ltr center" size=4 /></td>
		<td><input type="text" name="habits[calligraphy_weekly]" class="ltr center"  size=4 /></td>
	</tr>
	<tr>
		<td>سایر موارد هنری</td>
		<td>
			<label class="option">بلی</label><input type="radio" value="1" name="habits[arts]" />	
			<label class="option">خیر</label><input type="radio" value="2" name="habits[arts]" />
		</td>
		<td><input type="text" name="habits[arts_weekly]" class="ltr center" size=4 /></td>
		<td><input type="text" name="habits[arts_daily]" class="ltr center"  size=4 /></td>
		<td>
			<label class="option">بلی</label><input type="radio" value="1" name="habits[arts_cert]" />	
			<label class="option">خیر</label><input type="radio" value="2" name="habits[arts_cert]" />
		</td>
		<td>نام رشته هنری:<input type="text" name="habits[arts_name]" id="" size=12 /></td>
	</tr>
	<tr>
		<td>تلویزیون</td>
		<td>
			<label class="option">بلی</label><input type="radio" value="1" name="habits[tv]" />	
			<label class="option">خیر</label><input type="radio" value="2" name="habits[tv]" />
		</td>
		<td><input type="text" name="habits[tv_weekly]" class="ltr center" size=4 /></td>
		<td><input type="text" name="habits[tv_daily]" class="ltr center"  size=4 /></td>
	</tr>
	<tr>
		<td>فیلم</td>
		<td>
			<label class="option">بلی</label><input type="radio" value="1" name="habits[movie]" />	
			<label class="option">خیر</label><input type="radio" value="2" name="habits[movie]" />
		</td>
		<td><input type="text" name="habits[movie_weekly]" class="ltr center" size=4 /></td>
		<td><input type="text" name="habits[movie_daily]" class="ltr center"  size=4 /></td>
	</tr>
	<tr>
		<td>موسیقی</td>
		<td>
			<label class="option">بلی</label><input type="radio" value="1" name="habits[music]" />	
			<label class="option">خیر</label><input type="radio" value="2" name="habits[music]" />
		</td>
		<td><input type="text" name="habits[music_weekly]" class="ltr center" size=4 /></td>
		<td><input type="text" name="habits[music_daily]" class="ltr center"  size=4 /></td>
	</tr>
	<tr>
		<td>اینترنت</td>
		<td>
			<label class="option">بلی</label><input type="radio" value="1" name="habits[internet]" />	
			<label class="option">خیر</label><input type="radio" value="2" name="habits[internet]" />
		</td>
		<td><input type="text" name="habits[internet_weekly]" class="ltr center" size=4 /></td>
		<td><input type="text" name="habits[internet_daily]" class="ltr center"  size=4 /></td>
	</tr>
	<tr>
		<td>سایر موارد تفریحی</td>
		<td>
			<label class="option">بلی</label><input type="radio" value="1" name="habits[entertainment]" />	
			<label class="option">خیر</label><input type="radio" value="2" name="habits[entertainment]" />
		</td>
		<td><input type="text" name="habits[entertainment_weekly]" class="ltr center" size=4 /></td>
		<td><input type="text" name="habits[entertainment_daily]" class="ltr center"  size=4 /></td>
		<td colspan=3>نام:<input type="text" name="habits[entertainment_name]" id="" size=12 /></td>
	</tr>
</table>
<table width=100% class="INFORMA HTR">
	<tr>
		<td width=60% class="quest">آیا عضو شبکه های اجتماعی هستید؟</td>
		<td>
			<label class="option">بلی<input type="radio" value="1" name="habits[social_media]" />
			<label class="option">خیر</label><input type="radio" value="2" name="habits[social_media]" />
		</td>
	</tr>
	<tr>
		<td class="quest">آیا در کنار تحصیل به حرفه خاصی اشتغال دارید؟</td>
		<td>
			<label class="option">بلی</label><input type="radio" value="1" name="habits[profession]" />	
			<label class="option">خیر</label><input type="radio" value="2" name="habits[profession]" />
		</td>
	</tr>
	<tr>
		<td class="quest">در صورت مثبت بودن جواب نوع حرفه را بیان کنید</td>
		<td><input type="text" name="habits[profession_name]" /></td>
	</tr>
</table>