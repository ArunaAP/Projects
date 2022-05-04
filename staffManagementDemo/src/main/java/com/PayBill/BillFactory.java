package com.PayBill;

//create simple factory for create pay bill objects

public class BillFactory {
	
	
	//constance variable 
	
	private static final String phonebil = "phonebil";
	private static final String waterbil = "waterbil";
	private static final String electricitybil = "electricitybil";
	


	public PayBillDbUtil getBillType(String biltype){
		
		if(biltype== null) {
			return null;
		}
		if(biltype.equalsIgnoreCase(phonebil)) {
			
			return new PayPhoneBillDbUtil(); 
		}
		
		else if(biltype.equalsIgnoreCase(waterbil)) {
			
			return new PayWaterBillDbUtil();
		}
		
		else if (biltype.equalsIgnoreCase(electricitybil)) {
			
			return new PayElectricityBillDbUtil();
			
		}
		
		return null;
		
	}

}
