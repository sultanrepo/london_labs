SELECT
   patient_test.test_id,
   patient_test.status,
   patient_test.created_at,
   (
      SELECT
         patient.patient_name 
      FROM
         patient 
      WHERE
         patient.id = '1' LIMIT 1
   )
   AS patient_name,
   (
      SELECT
         tests_categories.cat_name 
      FROM
         tests_categories 
      WHERE
         tests_categories.id = patient_test.test_cat_id
   )
   AS cat_name,
   (
      SELECT
         tests.test_name 
      FROM
         tests 
      WHERE
         test_id = patient_test.test_id
   )
   AS test_name 
FROM
   patient_test 
WHERE
   patient_test.patient_id = '1';