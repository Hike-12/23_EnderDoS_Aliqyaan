create database medicine;
use medicine;
create table medicineinfo (
Id int primary key,
Name varchar(100),
Uses varchar(100)
);
insert into medicineinfo(Id,Name,Uses)
values
(1,"Mediprofen","Relief from mild to moderate pain and inflammation"),
(2,"Neurocalm XR","Extended-release tablets for anxiety and stress"),
(3,"CardioShield Plus","Lowering cholesterol levels and promoting heart health"),
(4,"OsteoFlexin","Joint supplement for arthritis and flexibility"),
(5,"DigestiProzyme","Digestive enzyme capsules for better digestion"),
(6,"VisionClear","Eye drops for dry eyes and improved vision"),
(7,"FlexiPatch","Transdermal pain relief patch for localized pain"),
(8,"DiabetiSure","Blood sugar control and management for diabetes"),
(9,"SleepGuardian PM","Nighttime sleep aid for Insomnia"),
(10,"Acetaminophen","Fever reduction"),
(11,"Amoxicillin","Antibiotic for bacterial infections."),
(12,"Metformin"," Managing type 2 diabetes."),
(13,"Naproxen","Anti-inflammatory."),
(14,"Doxazosin","Hypertension"),
(15,"Lisinopril","Heart failure");

select * from medicineinfo;



