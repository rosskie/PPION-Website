<?php
 
namespace models;
 
/**
 * @Entity
 * @Table(name="user")
 */

class User
{
	/**
	 * @Id
	 * @Column(type="integer", nullable=false)
	 * @GeneratedValue(strategy="AUTO")
	 */
	private $id;
	 
	/**
	 * @Column(type="string", length=64, unique=true, nullable=false)
	 */
	private $email;
	 
	/**
	 * @Column(type="string", length=64, nullable=false)
	 */
	private $password;
	/**
	 * @Column(type="string", length=64, nullable=false)
	 */
	private $name;
	 
	/**
	 * @Column(type="string", length=64, nullable=false)
	 */
	private $hometown;
	 
	/**
	 * @Column(type="string", length=64, nullable=false)
	 */
	private $affiliation;
	 
	/**
	 * @Column(type="date", nullable=false)
	 */
	private $arrival_date;
	/**
	 * @Column(type="date", nullable=true)
	 */
	private $birthday;
	 
	/**
	 * @Column(type="boolean", nullable=false)
	 */
	private $marriage_status;
	 
	/**
	 * @Column(type="string", length=1, nullable=true)
	 */
	private $gender;
	/**
	 * @Column(type="string", length=20, nullable=true)
	 */
	private $religion;
	 
	/**
	 * @Column(type="string", length=140, nullable=true)
	 */
	private $introduction;
	/**
	 * @Column(type="string", length=64, nullable=false)
	 */
	private $undergrad_university;
	 
	/**
	 * @Column(type="string", length=64, nullable=true)
	 */
	private $undergrad_department;
	 
	/**
	 * @Column(type="integer", length=4, nullable=true)
	 */
	private $undergrad_graduation_year;
	/**
	 * @Column(type="string", length=64, nullable=true)
	 */
	private $master_university;
	 
	/**
	 * @Column(type="string", length=64, nullable=true)
	 */
	private $master_department;
	 
	/**
	 * @Column(type="integer", length=4, nullable=true)
	 */
	private $master_graduation_year;
	/**
	 * @Column(type="string", length=64, nullable=true)
	 */
	private $phd_university; 
	/**
	 * @Column(type="string", length=64, nullable=true)
	 */
	private $phd_department;
	 
	/**
	 * @Column(type="integer", length=4, nullable=true)
	 */
	private $phd_graduation_year;
	/**
	 * @Column(type="string", length=64, nullable=true)
	 */
	private $informal_skill;
	/**
	 * @Column(type="boolean", nullable=false)
	 */
	private $left_the_country;
	 
	/**
	 * @Column(type="string", length=32, nullable=true)
	 */
	private $position;
	 
    public function getId() { return $this->id; }
    public function setId($id) { $this->id = $id; }
    public function setPassword($password) { $this->password = $password; }
    public function getPassword() {  return $this->password; }
    public function setName($name) { $this->name = $name; }
    public function getName() {  return $this->name; }
    public function setHometown($hometown) { $this->hometown = $hometown; }
    public function getHometown() {  return $this->hometown; }
    public function setAffiliation($affiliation) { $this->affiliation = $affiliation; }
    public function getAffiliation() {  return $this->affiliation; }
    public function setArrivalDate($arrival_date) { $this->arrival_date = $arrival_date; }
    public function getArrivalDate() {  return $this->arrival_date; }
    public function setBirthday($birthday) { $this->birthday = $birthday; }
    public function getBirthday() {  return $this->birthday; }
    public function setMarriedStatus($married_status) { $this->married_status = $married_status; }
    public function getMarriedStatus() {  return $this->married_status; }
    public function setGender($gender) { $this->gender = $gender; }
    public function getGender() {  return $this->gender; }
    public function setReligion($religion) { $this->religion = $religion; }
    public function getReligion() {  return $this->religion; }
    public function setIntroduction($introduction) { $this->introduction = $introduction; }
    public function getIntroduction() {  return $this->introduction; }
    public function setUndergradUniversity($undergrad_university) { $this->undergrad_university = $undergrad_university; }
    public function getUndergradUniversity() {  return $this->undergrad_university; }
    public function setUndergradDepartment($undergrad_department) { $this->undergrad_department = $undergrad_department; }
    public function getUndergradDepartment() {  return $this->undergrad_department; }
    public function setUndergradGraduationYear($undergrad_graduation_year) { $this->undergrad_graduation_year = $undergrad_graduation_year; }
    public function getUndergradGraduationYear() {  return $this->undergrad_graduation_year; }
    public function setMasterUniversity($master_university) { $this->master_university = $master_university; }
    public function getMasterUniversity() {  return $this->master_university; }
    public function setMasterDepartment($master_department) { $this->Master_department = $master_department; }
    public function getMasterDepartment() {  return $this->master_department; }
    public function setMasterGraduationYear($master_graduation_year) { $this->master_graduation_year = $master_graduation_year; }
    public function getMasterGraduationYear() {  return $this->master_graduation_year; }
    public function setPhdUniversity($phd_university) { $this->phd_university = $phd_university; }
    public function getPhdUniversity() {  return $this->phd_university; }
    public function setPhdDepartment($phd_department) { $this->phd_department = $phd_department; }
    public function getPhdDepartment() {  return $this->phd_department; }
    public function setPhdGraduationYear($phd_graduation_year) { $this->phd_graduation_year = $phd_graduation_year; }
    public function getPhdGraduationYear() {  return $this->phd_graduation_year; }
    public function setInformalSkill($informal_skill) { $this->informal_skill = $informal_skill; }
    public function getInformalSkill() {  return $this->informal_skill; }
    public function setLeftTheCountry($left_the_country) { $this->left_the_country = $left_the_country; }
    public function getLeftTheCountry() {  return $this->left_the_country; }
    public function setPosition($position) { $this->position = $position; }
    public function getPosition() {  return $this->position; }
}
