import 'package:cloud_firestore/cloud_firestore.dart';
import 'package:flutter/material.dart';
import 'package:kids/Reposiories/Model/model_insance.dart';
import 'package:youtube_player_flutter/youtube_player_flutter.dart';

class Level2Page extends StatefulWidget {
  const Level2Page({Key? key}) : super(key: key);

  @override
  State<Level2Page> createState() => _Level2PageState();
}

class _Level2PageState extends State<Level2Page> {
  final YoutubePlayerController _NumbersController = YoutubePlayerController(
    initialVideoId: 'knvrQvpHY7w',
    flags: const YoutubePlayerFlags(
      autoPlay: true,
      mute: false,
    ),
  );
  final YoutubePlayerController _session1Controller = YoutubePlayerController(
    initialVideoId: 'gdsBdnpVFvM',
    flags: const YoutubePlayerFlags(
      autoPlay: true,
      mute: false,
    ),
  );
  final YoutubePlayerController _session2Controller = YoutubePlayerController(
    initialVideoId: 'gHa3vBkMgE4',
    flags: const YoutubePlayerFlags(
      autoPlay: true,
      mute: false,
    ),
  );
  final YoutubePlayerController _session3Controller = YoutubePlayerController(
    initialVideoId: 'z8a36Wx5Ft8',
    flags: const YoutubePlayerFlags(
      autoPlay: true,
      mute: false,
    ),
  );
  final YoutubePlayerController _session4Controller = YoutubePlayerController(
    initialVideoId: 'UDImJUy34IY',
    flags: const YoutubePlayerFlags(
      autoPlay: true,
      mute: false,
    ),
  );
  final YoutubePlayerController _session5Controller = YoutubePlayerController(
    initialVideoId: '6BdW8meNa2E',
    flags: const YoutubePlayerFlags(
      autoPlay: true,
      mute: false,
    ),
  );
  final YoutubePlayerController _session6Controller = YoutubePlayerController(
    initialVideoId: 'bDEUeuUb4PU',
    flags: const YoutubePlayerFlags(
      autoPlay: true,
      mute: false,
    ),
  );
  final YoutubePlayerController _session7Controller = YoutubePlayerController(
    initialVideoId: 'jMpUrCiAx80',
    flags: const YoutubePlayerFlags(
      autoPlay: true,
      mute: false,
    ),
  );
  final YoutubePlayerController _session8Controller = YoutubePlayerController(
    initialVideoId: 'xvqu8AyT1_s',
    flags: const YoutubePlayerFlags(
      autoPlay: true,
      mute: false,
    ),
  );

  @override
  Widget build(BuildContext context) {
    return DefaultTabController(
        length: 9,
        child: Scaffold(
          backgroundColor: const Color(0xffeaeee0),
          appBar: AppBar(
            title: const Text(
              "Level 2",
            ),
            centerTitle: true,
            automaticallyImplyLeading: false,
            bottom: const TabBar(
              isScrollable: true,
              tabs: [
                Tab(
                  text: "Numbers",
                ),
                Tab(
                  text: "Session 1",
                ),
                Tab(
                  text: "Session 2",
                ),
                Tab(
                  text: "Session 3",
                ),
                Tab(
                  text: "Session 4",
                ),
                Tab(
                  text: "Session 5",
                ),
                Tab(
                  text: "Session 6",
                ),
                Tab(
                  text: "Session 7",
                ),
                Tab(
                  text: "Session 8",
                ),
              ],
            ),
          ),
          body: TabBarView(
            children: [
              Center(
                child: Column(
                  mainAxisAlignment: MainAxisAlignment.spaceBetween,
                  crossAxisAlignment: CrossAxisAlignment.end,
                  children: [
                    const SizedBox(
                      height: 50,
                    ),YoutubePlayer(
                      controller: _NumbersController,
                      showVideoProgressIndicator: true,
                      onReady: () {
                        _NumbersController.play();
                      },
                    ),
                    Padding(
                      padding: const EdgeInsets.all(12),
                      child: FloatingActionButton(
                        onPressed: () {
                          FirebaseFirestore.instance.collection("users data").doc(activeUserID).update({
                            "VideoID": "2",
                          });
                          Future.delayed(const Duration(seconds: 7), () {
                            FirebaseFirestore.instance.collection("users data").doc(activeUserID).update({
                              "VideoID": "3",
                            });                        });
                        },
                        child: const Icon(Icons.send_to_mobile),
                      ),
                    ),
                  ],
                ),
              ),
              Center(
                child: YoutubePlayer(
                  controller: _session1Controller,
                  showVideoProgressIndicator: true,
                  onReady: () {
                    _session1Controller.play();
                  },
                ),
              ),
              Center(
                child: YoutubePlayer(
                  controller: _session2Controller,
                  showVideoProgressIndicator: true,
                  onReady: () {
                    _session2Controller.play();
                  },
                ),
              ),
              Center(
                child: YoutubePlayer(
                  controller: _session3Controller,
                  showVideoProgressIndicator: true,
                  onReady: () {
                    _session3Controller.play();
                  },
                ),
              ),
              Center(
                child: YoutubePlayer(
                  controller: _session4Controller,
                  showVideoProgressIndicator: true,
                  onReady: () {
                    _session4Controller.play();
                  },
                ),
              ),
              Center(
                child: YoutubePlayer(
                  controller: _session5Controller,
                  showVideoProgressIndicator: true,
                  onReady: () {
                    _session5Controller.play();
                  },
                ),
              ),
              Center(
                child: YoutubePlayer(
                  controller: _session6Controller,
                  showVideoProgressIndicator: true,
                  onReady: () {
                    _session6Controller.play();
                  },
                ),
              ),
              Center(
                child: YoutubePlayer(
                  controller: _session7Controller,
                  showVideoProgressIndicator: true,
                  onReady: () {
                    _session7Controller.play();
                  },
                ),
              ),
              Center(
                child: YoutubePlayer(
                  controller: _session8Controller,
                  showVideoProgressIndicator: true,
                  onReady: () {
                    _session8Controller.play();
                  },
                ),
              ),
            ],
          ),
        ));
  }

// Widget videoPlayer(VideoPlayerController controller) {
//   return SizedBox(
//     width: MediaQuery.of(context).size.width,
//     height: MediaQuery.of(context).size.height,
//     child: Column(
//       mainAxisAlignment: MainAxisAlignment.center,
//       children: [
//         AspectRatio(
//           aspectRatio: 4 / 3,
//           child: VideoPlayer(controller),
//         ),
//         Container(
//           color: Colors.white,
//           child: Row(
//             children: [
//               IconButton(
//                 onPressed: () {
//                   setState(() {
//                     controller.value.isPlaying ? controller.pause() : controller.play();
//                   });
//                 },
//                 icon: Icon(
//                   controller.value.isPlaying ? Icons.pause : Icons.play_arrow,
//                 ),
//               ),
//               Expanded(
//                 child: Container(
//                   height: 20,
//                   padding: const EdgeInsets.fromLTRB(0, 0, 10, 0),
//                   child: ProgressBar(
//                     progress: Duration(milliseconds: controller.value.position.inMilliseconds),
//                     total: Duration(milliseconds: controller.value.duration.inMilliseconds),
//                     timeLabelLocation: TimeLabelLocation.sides,
//                     onSeek: (duration) {
//                       controller.seekTo(duration);
//                       print('User selected a new time: $duration');
//                     },
//                   ),
//                 ),
//               ),
//             ],
//           ),
//         )
//       ],
//     ),
//   );
// }
}
