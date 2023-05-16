import 'package:cloud_firestore/cloud_firestore.dart';
import 'package:date_time_picker/date_time_picker.dart';
import 'package:firebase_auth/firebase_auth.dart';
import 'package:flutter/material.dart';
import 'package:kids/view/home_screen.dart';
import 'package:kids/Reposiories/Model/model_insance.dart';
import 'package:shared_preferences/shared_preferences.dart';
class SignUp extends StatefulWidget {
  const SignUp({Key? key}) : super(key: key);

  @override
  State<SignUp> createState() => _SignUpState();
}

class _SignUpState extends State<SignUp> {
  TextEditingController fullNameController = TextEditingController();
  TextEditingController phoneController = TextEditingController();
  TextEditingController userNameController = TextEditingController();
  TextEditingController passwordController = TextEditingController();
  TextEditingController confirmedPasswordController = TextEditingController();
  TextDirection textDirection = TextDirection.ltr;
  final formGlobalKey = GlobalKey<FormState>();
  bool _passwordVisible = true;
  bool _passwordconfirmVisible = true;

  @override
  Widget build(BuildContext context) {
    return Scaffold(
      appBar: AppBar(
        title: const Text("SignUp"),
        centerTitle: true,
      ),
      body: Padding(
        padding: const EdgeInsets.all(15),
        child: Form(
          key: formGlobalKey,
          child: Center(
            child: SingleChildScrollView(
              child: SizedBox(
                width: 400,
                child: Column(
                  mainAxisAlignment: MainAxisAlignment.center,
                  crossAxisAlignment: CrossAxisAlignment.center,
                  children: [
                    SizedBox(
                      width: MediaQuery.of(context).size.width - 50,
                      child: const Text(
                        "Sign Up",
                        style: TextStyle(
                          fontSize: 30,
                          fontWeight: FontWeight.bold,
                        ),
                      ),
                    ),
                    const SizedBox(
                      height: 25,
                    ),
                    SizedBox(
                      width: MediaQuery.of(context).size.width - 50,
                      child: TextFormField(
                        textDirection: textDirection,
                        controller: fullNameController,
                        validator: (value) {
                          if (value!.isEmpty) {
                            return "Please enter your full name";
                          }
                          return null;
                        },
                        decoration: InputDecoration(
                          hintTextDirection: textDirection,
                          hintText: "Full Name",
                          prefixIcon: const Icon(Icons.person),
                          border: const OutlineInputBorder(),
                        ),
                        textInputAction: TextInputAction.next,
                        autofocus: true,
                      ),
                    ),
                    const SizedBox(
                      height: 10,
                    ),
                    SizedBox(
                      width: MediaQuery.of(context).size.width - 50,
                      child: TextFormField(
                          textDirection: textDirection,
                          controller: userNameController,
                          decoration: InputDecoration(
                            hintTextDirection: textDirection,
                            hintText: "Email",
                            border: const OutlineInputBorder(),
                            prefixIcon: const Icon(Icons.email_outlined),
                          ),
                          autofocus: true,
                          textInputAction: TextInputAction.next,
                          validator: (value) {
                            if (value!.isEmpty) {
                              return "Please enter your email";
                            } else if (!value.contains("@") || !value.contains(".") || value.contains(" ")) {
                              return "Please enter a valid email";
                            }
                            return null;
                          }),
                    ),
                    const SizedBox(
                      height: 10,
                    ),
                    // password text field
                    SizedBox(
                      width: MediaQuery.of(context).size.width - 50,
                      child: TextFormField(
                          obscureText: _passwordVisible,
                          textDirection: textDirection,
                          controller: passwordController,
                          decoration: InputDecoration(
                            hintTextDirection: textDirection,
                            hintText: "Password",
                            border: const OutlineInputBorder(),
                            prefixIcon: const Icon(Icons.lock_outline_rounded),
                            suffixIcon: IconButton(
                              icon: Icon(
                                // Based on passwordVisible state choose the icon
                                _passwordVisible ? Icons.visibility_off_outlined : Icons.visibility_outlined,
                                color: Colors.black,
                              ),
                              onPressed: () {
                                // Update the state i.e. toogle the state of passwordVisible variable
                                setState(() {
                                  _passwordVisible = !_passwordVisible;
                                });
                              },
                            ),
                          ),
                          autofocus: true,
                          validator: (value) {
                            if (value == null || value.isEmpty) {
                              return "Please enter your password";
                            }
                            return null;
                          }),
                    ),
                    const SizedBox(
                      height: 10,
                    ),
                    SizedBox(
                      width: MediaQuery.of(context).size.width - 50,
                      child: TextFormField(
                          obscureText: _passwordconfirmVisible,
                          controller: confirmedPasswordController,
                          textDirection: textDirection,
                          decoration: InputDecoration(
                            hintTextDirection: textDirection,
                            hintText: "Confirmed Password",
                            border: const OutlineInputBorder(),
                            prefixIcon: const Icon(Icons.lock_outline_rounded),
                            suffixIcon: IconButton(
                              icon: Icon(
                                // Based on passwordVisible state choose the icon
                                _passwordconfirmVisible ? Icons.visibility_off_outlined : Icons.visibility_outlined,
                                color: Colors.black,
                              ),
                              onPressed: () {
                                // Update the state i.e. toogle the state of passwordVisible variable
                                setState(() {
                                  _passwordconfirmVisible = !_passwordconfirmVisible;
                                });
                              },
                            ),
                          ),
                          autofocus: true,
                          validator: (value) {
                            if (value == null || value.isEmpty) {
                              return "Please enter your password";
                            }
                            if (value != passwordController.text) {
                              return "Password not match";
                            }
                            return null;
                          }),
                    ),
                    const SizedBox(
                      height: 10,
                    ),
                    // phone text field
                    SizedBox(
                      width: MediaQuery.of(context).size.width - 50,
                      child: TextFormField(
                        controller: phoneController,
                        decoration: const InputDecoration(
                          labelText: "Phone",
                          hintText: "Enter your Phone",
                          border: OutlineInputBorder(),
                          prefixIcon: Icon(Icons.phone),
                        ),
                        validator: (value) {
                          if (value == null || value.isEmpty) {
                            return "Please enter your Phone";
                          }
                          return null;
                        },
                      ),
                    ),
                    const SizedBox(
                      height: 10,
                    ),
                    SizedBox(
                      width: MediaQuery.of(context).size.width * 0.9,
                      height: 40,
                      child: ElevatedButton(
                        child: const Text(
                          "Sign Up",
                          style: TextStyle(color: Colors.white, fontSize: 20),
                        ),
                        onPressed: () async {
                          if (formGlobalKey.currentState!.validate()) {
                            // sign up with email and password and save the user in the database firebase
                            try {
                              UserCredential userCredential = await FirebaseAuth.instance
                                  .createUserWithEmailAndPassword(email: userNameController.text, password: passwordController.text);
                              // save the user in the database firebase
                              await FirebaseFirestore.instance.collection("users data").doc(userCredential.user!.uid).set({
                                "full name": fullNameController.text,
                                "email": userNameController.text,
                                "password": passwordController.text,
                                "phone": phoneController.text,
                                "dateOfBirth": DateTime.now().toString(),
                                "VideoID": "0",
                                //  add the sensor data
                                "sensordata": {
                                  "Temperature": "37",
                                  "MuscleActivity": "Good",
                                  "RespirationRate": "Normal",
                                  "StressRate": "Happy",
                                  "HeartRate": "BD TD",
                                  "FallDetector": "Normal",
                                },
                              });
                              activeUserID = userCredential.user!.uid;
                              // Obtain shared preferences.
                              final SharedPreferences prefs = await SharedPreferences.getInstance();
                              // Save an String value to 'action' key.
                              await prefs.setString('ID', activeUserID);
                              // go to the home page
                              Navigator.pushReplacement(context, MaterialPageRoute(builder: (context) => const HomeScreen()));
                            } on FirebaseAuthException catch (e) {
                              if (e.code == 'weak-password') {
                                ScaffoldMessenger.of(context).showSnackBar(const SnackBar(content: Text('The password provided is too weak.')));
                              } else if (e.code == 'email-already-in-use') {
                                ScaffoldMessenger.of(context).showSnackBar(const SnackBar(content: Text('The account already exists for that email.')));
                              }
                            } catch (e) {
                              print(e);
                            }
                          }
                        },
                      ),
                    ),
                  ],
                ),
              ),
            ),
          ),
        ),
      ),
    );
  }
}
