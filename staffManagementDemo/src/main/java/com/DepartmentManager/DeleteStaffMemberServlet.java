package com.DepartmentManager;

import java.io.IOException;
import java.util.List;

import javax.servlet.RequestDispatcher;
import javax.servlet.ServletException;
import javax.servlet.annotation.WebServlet;
import javax.servlet.http.HttpServlet;
import javax.servlet.http.HttpServletRequest;
import javax.servlet.http.HttpServletResponse;


import com.staffManagement.StaffMember;


@WebServlet("/DeleteStaffMemberServlet")
public class DeleteStaffMemberServlet extends HttpServlet {
	private static final long serialVersionUID = 1L;

	
	protected void doPost(HttpServletRequest request, HttpServletResponse response) throws ServletException, IOException {
		
		String id = request.getParameter("id");
		
		boolean isTrue;
		
		isTrue = DepartmentManagerDbUtill.deleteStaffMember(id);
		
		if(isTrue == true) {
			
			RequestDispatcher dis = request.getRequestDispatcher("insertSfMemForm.jsp");
			dis.forward(request, response);
			
		}else {
			
			List<StaffMember> SfDetails = DepartmentManagerDbUtill.getStaffMemberDetails(id);
			request.setAttribute("SfDetails", SfDetails);
			
			RequestDispatcher dis = request.getRequestDispatcher("ManagerViewAccount.jsp");
			dis.forward(request, response);
			
		}
		
		
	}

}
