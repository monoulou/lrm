<?php

/* MALrmBundle:Gestion:resume.html.twig */
class __TwigTemplate_2b84c30bbb1abf8f5eec914729b544a8fbb91cf855992030f96bb45f2bb98d8f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::base.html.twig", "MALrmBundle:Gestion:resume.html.twig", 1);
        $this->blocks = array(
            'stylesheets' => array($this, 'block_stylesheets'),
            'javascripts' => array($this, 'block_javascripts'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "::base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_46b69cca1a6a0b48b6f50f3096eaea3bb54b4c63cd4e1df82dbb697e05254639 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_46b69cca1a6a0b48b6f50f3096eaea3bb54b4c63cd4e1df82dbb697e05254639->enter($__internal_46b69cca1a6a0b48b6f50f3096eaea3bb54b4c63cd4e1df82dbb697e05254639_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "MALrmBundle:Gestion:resume.html.twig"));

        $__internal_193dcc09b56a62675617f8c5cf195b81b2dec788bf7eeda2d84d1f8e759d60b7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_193dcc09b56a62675617f8c5cf195b81b2dec788bf7eeda2d84d1f8e759d60b7->enter($__internal_193dcc09b56a62675617f8c5cf195b81b2dec788bf7eeda2d84d1f8e759d60b7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "MALrmBundle:Gestion:resume.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_46b69cca1a6a0b48b6f50f3096eaea3bb54b4c63cd4e1df82dbb697e05254639->leave($__internal_46b69cca1a6a0b48b6f50f3096eaea3bb54b4c63cd4e1df82dbb697e05254639_prof);

        
        $__internal_193dcc09b56a62675617f8c5cf195b81b2dec788bf7eeda2d84d1f8e759d60b7->leave($__internal_193dcc09b56a62675617f8c5cf195b81b2dec788bf7eeda2d84d1f8e759d60b7_prof);

    }

    // line 3
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_7a56674ead89449d75569097402340e0693c96c166d20f5a3ab921c97cc19f24 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7a56674ead89449d75569097402340e0693c96c166d20f5a3ab921c97cc19f24->enter($__internal_7a56674ead89449d75569097402340e0693c96c166d20f5a3ab921c97cc19f24_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_87b431ae7170d2d290f2fe52f5383ccf14a9260646190543a60de6a66a59eb2c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_87b431ae7170d2d290f2fe52f5383ccf14a9260646190543a60de6a66a59eb2c->enter($__internal_87b431ae7170d2d290f2fe52f5383ccf14a9260646190543a60de6a66a59eb2c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 4
        echo "     <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/client.css"), "html", null, true);
        echo "\" rel='stylesheet' type='text/css' />
     <link href=\"";
        // line 5
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("DataTables/media/css/dataTables.bootstrap.min.css"), "html", null, true);
        echo "\" rel='stylesheet' type='text/css' />
 ";
        
        $__internal_87b431ae7170d2d290f2fe52f5383ccf14a9260646190543a60de6a66a59eb2c->leave($__internal_87b431ae7170d2d290f2fe52f5383ccf14a9260646190543a60de6a66a59eb2c_prof);

        
        $__internal_7a56674ead89449d75569097402340e0693c96c166d20f5a3ab921c97cc19f24->leave($__internal_7a56674ead89449d75569097402340e0693c96c166d20f5a3ab921c97cc19f24_prof);

    }

    // line 8
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_ade2a42020eec1b5abe7261bfd3e129abf75a30354ce968ec02c70081d2c4894 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ade2a42020eec1b5abe7261bfd3e129abf75a30354ce968ec02c70081d2c4894->enter($__internal_ade2a42020eec1b5abe7261bfd3e129abf75a30354ce968ec02c70081d2c4894_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_3a5aed004787f5615b7f1ae76d57ee01ed1d42d066950d804e169c28acc0de89 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3a5aed004787f5615b7f1ae76d57ee01ed1d42d066950d804e169c28acc0de89->enter($__internal_3a5aed004787f5615b7f1ae76d57ee01ed1d42d066950d804e169c28acc0de89_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 9
        echo "    <script src =\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("DataTables/media/js/dataTables.bootstrap.min.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
    <script src=\"";
        // line 10
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/tables.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
";
        
        $__internal_3a5aed004787f5615b7f1ae76d57ee01ed1d42d066950d804e169c28acc0de89->leave($__internal_3a5aed004787f5615b7f1ae76d57ee01ed1d42d066950d804e169c28acc0de89_prof);

        
        $__internal_ade2a42020eec1b5abe7261bfd3e129abf75a30354ce968ec02c70081d2c4894->leave($__internal_ade2a42020eec1b5abe7261bfd3e129abf75a30354ce968ec02c70081d2c4894_prof);

    }

    // line 15
    public function block_body($context, array $blocks = array())
    {
        $__internal_8324744e458f5cb0f863e1ac815fe809022306ee57abce61827269f8db769305 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8324744e458f5cb0f863e1ac815fe809022306ee57abce61827269f8db769305->enter($__internal_8324744e458f5cb0f863e1ac815fe809022306ee57abce61827269f8db769305_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_5b77b26f05ccb7dfbe205c2ae1c787064d39dce34f0e5acbf3344c7ae7b5c4a0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5b77b26f05ccb7dfbe205c2ae1c787064d39dce34f0e5acbf3344c7ae7b5c4a0->enter($__internal_5b77b26f05ccb7dfbe205c2ae1c787064d39dce34f0e5acbf3344c7ae7b5c4a0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 16
        echo "
    <div class=\"container-fluid\" id=\"header_container\">
        <div class=\"row\">
            <div class=\"col-lg-2\" style=\"margin-left: -120px\">
                ";
        // line 20
        if ($this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("IS_AUTHENTICATED_REMEMBERED")) {
            // line 21
            echo "                    <i class=\"material-icons\">person</i> Bonjour, ";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "username", array()), "html", null, true);
            echo "
                ";
        } else {
            // line 23
            echo "                    <a href=\"";
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_security_login");
            echo "\">Connexion</a>
                ";
        }
        // line 25
        echo "            </div>
            <div class=\"col-lg-offset-11\" style=\"padding-top: 10px\" id=\"logout\"><a href=\"";
        // line 26
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_security_logout");
        echo "\"><i class=\"material-icons\">input</i></a></div>
        </div>
    </div>
    <div class=\"container-fluid\" id=\"main_container\">
    <!-- START TOP NAVBAR-->
    ";
        // line 31
        $this->loadTemplate("navbar.html.twig", "MALrmBundle:Gestion:resume.html.twig", 31)->display($context);
        // line 32
        echo "    <!-- END TOP NAVBAR -->
    <!-- START SIDEBAR-->
    ";
        // line 34
        $this->loadTemplate("sidebar.html.twig", "MALrmBundle:Gestion:resume.html.twig", 34)->display($context);
        // line 35
        echo "    <!-- END SIDEBAR-->

    <div class=\"col-lg-9\" style=\"margin-left: 10px;\">
            <div class=\"row\">
                <h3>LISTE DES CANDIDATS</h3><hr style=\"border: 1px solid darkgray;\">
            </div>
            <div class=\"row\" id=\"head_row\">
                <h5>INTERFACE DE VISUALISATION DES CANDIDATS RECRUTES PAR POSTE</h5>
            </div>

        <div class=\"row\" style=\"margin-top: 20px\">
            ";
        // line 46
        $context["i"] = 0;
        // line 47
        echo "            <div class=\"panel panel-default\">
                <div class=\"panel-heading\">
                    <h3 class=\"panel-title\">";
        // line 49
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["arrayPoste"]) ? $context["arrayPoste"] : $this->getContext($context, "arrayPoste")), 1, array(), "array"), "html", null, true);
        echo " -  ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["arrayPoste"]) ? $context["arrayPoste"] : $this->getContext($context, "arrayPoste")), 2, array(), "array"), "html", null, true);
        echo "</h3>
                </div>
                <table class=\"table\">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>Nom</th>
                            <th>Prénom</th>
                            <th>Utilisateur</th>
                            <th>Date Intégration</th>
                        </tr>
                    </thead>
                    ";
        // line 61
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["resumeByPoste"]) ? $context["resumeByPoste"] : $this->getContext($context, "resumeByPoste")));
        foreach ($context['_seq'] as $context["_key"] => $context["resume"]) {
            // line 62
            echo "                        ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($context["resume"]);
            foreach ($context['_seq'] as $context["id"] => $context["candidat"]) {
                // line 63
                echo "                            <tbody>
                            <tr>
                                ";
                // line 65
                $context["i"] = ((isset($context["i"]) ? $context["i"] : $this->getContext($context, "i")) + 1);
                // line 66
                echo "                                <td>";
                echo twig_escape_filter($this->env, (isset($context["i"]) ? $context["i"] : $this->getContext($context, "i")), "html", null, true);
                echo "</td>
                                <td><a href=\"";
                // line 67
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("ma_lrm_gestion_detail", array("id" => $context["id"])), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $this->getAttribute($context["candidat"], 1, array(), "array"), "html", null, true);
                echo "</a></td>
                                <td>";
                // line 68
                echo twig_escape_filter($this->env, $this->getAttribute($context["candidat"], 2, array(), "array"), "html", null, true);
                echo "</td>
                                <td>";
                // line 69
                echo twig_escape_filter($this->env, $this->getAttribute($context["candidat"], 3, array(), "array"), "html", null, true);
                echo "</td>
                                <td>";
                // line 70
                echo twig_escape_filter($this->env, $this->getAttribute($context["candidat"], 4, array(), "array"), "html", null, true);
                echo "</td>
                            </tr>
                            </tbody>
                        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['id'], $context['candidat'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 74
            echo "                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['resume'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 75
        echo "                </table>
            </div>
        </div>

        <div class=\"row\">
            <div class=\"col-lg-offset-11\">
                <a href=\"";
        // line 81
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("ma_lrm_gestion_index");
        echo "\"><i class=\"material-icons\" id=\"previous\">skip_previous</i></a>
            </div>
        </div>
    </div>



";
        
        $__internal_5b77b26f05ccb7dfbe205c2ae1c787064d39dce34f0e5acbf3344c7ae7b5c4a0->leave($__internal_5b77b26f05ccb7dfbe205c2ae1c787064d39dce34f0e5acbf3344c7ae7b5c4a0_prof);

        
        $__internal_8324744e458f5cb0f863e1ac815fe809022306ee57abce61827269f8db769305->leave($__internal_8324744e458f5cb0f863e1ac815fe809022306ee57abce61827269f8db769305_prof);

    }

    public function getTemplateName()
    {
        return "MALrmBundle:Gestion:resume.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  236 => 81,  228 => 75,  222 => 74,  212 => 70,  208 => 69,  204 => 68,  198 => 67,  193 => 66,  191 => 65,  187 => 63,  182 => 62,  178 => 61,  161 => 49,  157 => 47,  155 => 46,  142 => 35,  140 => 34,  136 => 32,  134 => 31,  126 => 26,  123 => 25,  117 => 23,  111 => 21,  109 => 20,  103 => 16,  94 => 15,  82 => 10,  77 => 9,  68 => 8,  56 => 5,  51 => 4,  42 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"::base.html.twig\" %}

 {% block stylesheets %}
     <link href=\"{{ asset ('css/client.css') }}\" rel='stylesheet' type='text/css' />
     <link href=\"{{ asset ('DataTables/media/css/dataTables.bootstrap.min.css') }}\" rel='stylesheet' type='text/css' />
 {% endblock %}

{% block javascripts %}
    <script src =\"{{ asset ('DataTables/media/js/dataTables.bootstrap.min.js') }}\" type=\"text/javascript\"></script>
    <script src=\"{{ asset('js/tables.js') }}\" type=\"text/javascript\"></script>
{% endblock %}



{% block body %}

    <div class=\"container-fluid\" id=\"header_container\">
        <div class=\"row\">
            <div class=\"col-lg-2\" style=\"margin-left: -120px\">
                {% if is_granted(\"IS_AUTHENTICATED_REMEMBERED\") %}
                    <i class=\"material-icons\">person</i> Bonjour, {{ app.user.username }}
                {% else %}
                    <a href=\"{{ path('fos_user_security_login') }}\">Connexion</a>
                {% endif %}
            </div>
            <div class=\"col-lg-offset-11\" style=\"padding-top: 10px\" id=\"logout\"><a href=\"{{ path('fos_user_security_logout') }}\"><i class=\"material-icons\">input</i></a></div>
        </div>
    </div>
    <div class=\"container-fluid\" id=\"main_container\">
    <!-- START TOP NAVBAR-->
    {% include 'navbar.html.twig' %}
    <!-- END TOP NAVBAR -->
    <!-- START SIDEBAR-->
    {% include 'sidebar.html.twig' %}
    <!-- END SIDEBAR-->

    <div class=\"col-lg-9\" style=\"margin-left: 10px;\">
            <div class=\"row\">
                <h3>LISTE DES CANDIDATS</h3><hr style=\"border: 1px solid darkgray;\">
            </div>
            <div class=\"row\" id=\"head_row\">
                <h5>INTERFACE DE VISUALISATION DES CANDIDATS RECRUTES PAR POSTE</h5>
            </div>

        <div class=\"row\" style=\"margin-top: 20px\">
            {% set i = 0 %}
            <div class=\"panel panel-default\">
                <div class=\"panel-heading\">
                    <h3 class=\"panel-title\">{{ arrayPoste[1] }} -  {{ arrayPoste[2] }}</h3>
                </div>
                <table class=\"table\">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>Nom</th>
                            <th>Prénom</th>
                            <th>Utilisateur</th>
                            <th>Date Intégration</th>
                        </tr>
                    </thead>
                    {% for resume in resumeByPoste %}
                        {% for id, candidat in resume %}
                            <tbody>
                            <tr>
                                {% set i = i + 1 %}
                                <td>{{ i }}</td>
                                <td><a href=\"{{ path('ma_lrm_gestion_detail', { 'id': id }) }}\">{{ candidat[1] }}</a></td>
                                <td>{{ candidat[2] }}</td>
                                <td>{{ candidat[3] }}</td>
                                <td>{{ candidat[4] }}</td>
                            </tr>
                            </tbody>
                        {% endfor %}
                    {% endfor  %}
                </table>
            </div>
        </div>

        <div class=\"row\">
            <div class=\"col-lg-offset-11\">
                <a href=\"{{ path('ma_lrm_gestion_index') }}\"><i class=\"material-icons\" id=\"previous\">skip_previous</i></a>
            </div>
        </div>
    </div>



{% endblock %}", "MALrmBundle:Gestion:resume.html.twig", "C:\\wamp64\\www\\ligne_rh\\src\\MA\\LrmBundle/Resources/views/Gestion/resume.html.twig");
    }
}
