<?php
echo 'The following are some examples of Spaceship operator behavior';
echo '<br>';
echo 'Numbers';
echo '<br>';
echo 1.5 <=> 1.5;
echo '<br>';
echo 1.5 <=> 2.5;
echo '<br>';
echo 2.5  <=>1.5;

echo '<br>';
echo 'Strings';
echo "a" <=> "a";
echo '<br>';
echo "a" <=> "b";
echo '<br>';
echo "b" <=>"a";
echo '<br>';
echo "a" <=> "aa";
echo '<br>';
echo "zz" <=> "aa";

echo '<br>';
echo 'Arrays';
echo [] <=> [];
echo '<br>';
echo [1,2,3] <=> [1,2,3];
echo '<br>';
echo [1,2,3] <=> [1,2,1];
echo '<br>';
echo [1,2,3] <=> [1,2,4];
echo '<br>';
echo [1,2,3] <=> [];
