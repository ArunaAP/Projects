package com.ApplyLeave;

public class viewleave {
	
	private int count;
	private String name;
	private String id;
	private String type;
	private String date;
	private String reason;
	
	
	
	public viewleave(int count, String name, String id, String type, String date, String reason) {
		super();
		this.count = count;
		this.name = name;
		this.id = id;
		this.type = type;
		this.date = date;
		this.reason = reason;
	}



	public int getCount() {
		return count;
	}



	public String getName() {
		return name;
	}



	public String getId() {
		return id;
	}



	public String getType() {
		return type;
	}



	public String getDate() {
		return date;
	}



	public String getReason() {
		return reason;
	}

}
