package com.Salary;

public class payslip {
	
	int sid;
	String sfmemberid;
	String month;
	double basic;
	double allowance;
	double bonus;
	double fuel;
    double ot;
    double epf;
    double donation;
    double fee;
    double tax;
    double total;
    
    
	public payslip(int sid, String sfmemberid, String month, double basic, double allowance, double bonus, double fuel,
			double ot, double epf, double donation, double fee, double tax, double total) {
		
		this.sid = sid;
		this.sfmemberid = sfmemberid;
		this.month = month;
		this.basic = basic;
		this.allowance = allowance;
		this.bonus = bonus;
		this.fuel = fuel;
		this.ot = ot;
		this.epf = epf;
		this.donation = donation;
		this.fee = fee;
		this.tax = tax;
		this.total = total;
		
	}


	public int getSid() {
		return sid;
	}


	public String getSfmemberid() {
		return sfmemberid;
	}


	public String getMonth() {
		return month;
	}


	public double getBasic() {
		return basic;
	}


	public double getAllowance() {
		return allowance;
	}


	public double getBonus() {
		return bonus;
	}


	public double getFuel() {
		return fuel;
	}


	public double getOt() {
		return ot;
	}


	public double getEpf() {
		return epf;
	}


	public double getDonation() {
		return donation;
	}


	public double getFee() {
		return fee;
	}


	public double getTax() {
		return tax;
	}


	public double getTotal() {
		return total;
	}




}
