<php? String EMAIL_PATTERN="^[a-zA-Z0-9]{1,20}@[a-zA-Z0-9]{1,20}.[a-zA-Z]{2,3}$";
//pour verifier si l address est correct ou bien non
Pattern pattern = Pattern.compile(EMAIL_PATTERN);
Matcher regexMatcher = pattern.matcher(txtun.getText());
Matcher regexMatchers = pattern.matcher(txtun.getText());

        
        try
{if(regexMatcher.matches()){

 String Sql = "Select * from log_personeMorale WHERE username ='" +txtun.getText()+"'and password='"+txtpd.getText()+"'";
        ps = cnx.prepareStatement(Sql);
        Rs = ps.executeQuery();
        if (Rs.next()){
            JOptionPane.showMessageDialog(null, "username and password is Correct");
            Principale s = new Principale();
            s.setVisible(true);
            
            
            dispose();
        }else {
            JOptionPane.showMessageDialog(null, "invalide username or password" );
            at.setText("invalid username or password");
        at.setForeground(Color.red);}
}else {at.setText("champs email incorrect");
            at.setForeground(Color.blue);}
       
}catch(Exception e){
    JOptionPane.showMessageDialog(null, e);
}
?>