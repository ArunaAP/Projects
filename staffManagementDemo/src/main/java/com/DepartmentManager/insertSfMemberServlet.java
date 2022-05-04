package com.DepartmentManager;

import java.io.IOException;

import javax.servlet.RequestDispatcher;
import javax.servlet.ServletException;
import javax.servlet.annotation.WebServlet;
import javax.servlet.http.HttpServlet;
import javax.servlet.http.HttpServletRequest;
import javax.servlet.http.HttpServletResponse;




@WebServlet("/insertSfMemberServlet")
public class insertSfMemberServlet extends HttpServlet {
	private static final long serialVersionUID = 1L;


	protected void doPost(HttpServletRequest request, HttpServletResponse response) throws ServletException, IOException {
		
		String name = request.getParameter("name");
		String email = request.getParameter("email");
		String pno = request.getParameter("pno");
		String uname = request.getParameter("uname");
		String password = request.getParameter("password");
		
		
		boolean isTrue;
		
		isTrue = DepartmentManagerDbUtill.insertNewMemberForm(name, email, pno, uname, password);
		
		if(isTrue == true) {
			
			RequestDispatcher dis = request.getRequestDispatcher("SuccessNewMemberAdd.jsp");
			dis.forward(request, response);
			
		}else if(isTrue == false){
			
			RequestDispatcher dis2 = request.getRequestDispatcher("UnsuccessNewMemberAdd.jsp");
			dis2.forward(request, response);
			
		}
		
		
		
	}

}
