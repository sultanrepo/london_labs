SELECT 
  patient.id, 
  patient.lab_id, 
  patient.patient_name, 
  patient.patient_age, 
  patient.sex, 
  patient.patient_mobile_no, 
  patient.patient_email, 
  patient.patient_ref, 
  patient.hospital, 
  patient.doctor, 
  patient.discount_perc, 
  patient.status, 
  patient.img, 
  patient.created_at, 
  patient.updated_at, 
  patient_test.test_id, 
  patient_test.test_cat_id, 
  (
    SELECT 
      hospital_name 
    FROM 
      hospitals 
    WHERE 
      hospital_id = patient.hospital
  ) AS hospital_name, 
  (
    SELECT 
      doctor_name 
    FROM 
      doctors 
    WHERE 
      doctor_id = patient.doctor
  ) AS doctor_name, 
  IF(
    patient.hospital > 0, 'Doctor Refrance', 
    'Self Refrance'
  ) as refrance 
FROM 
  patient 
  INNER JOIN patient_test ON patient.id = patient_test.patient_id;
