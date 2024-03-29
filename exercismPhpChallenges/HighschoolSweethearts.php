<?php
/* 
https://exercism.org/tracks/php/exercises/sweethearts

In this exercise, you are going to help high school sweethearts profess their love on social media by generating an ASCII heart with their initials:

     ******       ******
   **      **   **      **
 **         ** **         **
**            *            **
**                         **
**     J. K.  +  M. B.     **
 **                       **
   **                   **
     **               **
       **           **
         **       **
           **   **
             ***
              *

1. Get the name's first letter
Implement the HighSchoolSweetheart::firstLetter function. It should take a name and return its first letter. It should clean up any unnecessary whitespace from the name.

<?php
$sweetheart = new HighSchoolSweetheart();
$sweetheart->firstLetter("Jane");
# => "J"


2. Format the first letter as an initial
Implement the HighSchoolSweetheart::initial function. It should take a name and return its first letter, uppercase, followed by a dot. Make sure to reuse HighSchoolSweetheart::first_letter that you defined in the previous step.

<?php
$sweetheart = new HighSchoolSweetheart();
$sweetheart->initial("jane");
# => "J."


3. Split the full name into the first name and the last name
Implement the HighSchoolSweetheart::initials function. It should take a full name, consisting of a first name and a last name separated by a space, and return the initials. Make sure to reuse HighSchoolSweetheart::initial that you defined in the previous step.

<?php
$sweetheart = new HighSchoolSweetheart();
$sweetheart->initials("Jane Doe");
# => "J. D."


4. Put the initials inside of the heart
Implement the HighSchoolSweetheart::pair function. It should take two full names and return the initials inside an ASCII heart. Make sure to reuse HighSchoolSweetheart::initials that you defined in the previous step.

<?php
$sweetheart = new HighSchoolSweetheart();
$sweetheart->pair("Blake Miller", "Riley Lewis")
# => """
#      ******       ******
#    **      **   **      **
#  **         ** **         **
# **            *            **
# **                         **
# **     B. M.  +  R. L.     **
#  **                       **
#    **                   **
#      **               **
#        **           **
#          **       **
#            **   **
#              ***
#               *
# """
*/

class HighSchoolSweetheart
{
    public function firstLetter(string $name): string
    { 
        return trim($name)[0];
    }

    public function initial(string $name): string
    {
        return strtoupper( $this->firstLetter( $name ) ) . ".";
    }

    public function initials(string $name): string
    {
        $nameParts = explode(' ', $name);
        $initials = '';
        foreach ($nameParts as $part) {
            $initials .= $this->initial($part) . ' ';
        }
        return trim($initials);
    }

    public function pair(string $sweetheart_a, string $sweetheart_b): string
    {
        $initialOne = $this->initials($sweetheart_a);
        $initialTwo = $this->initials($sweetheart_b);
        return <<<EOD
         ******       ******
       **      **   **      **
     **         ** **         **
    **            *            **
    **                         **
    **     $initialOne  +  $initialTwo     **
     **                       **
       **                   **
         **               **
           **           **
             **       **
               **   **
                 ***
                  *
    EOD;
    }
}