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
        $__internal_40e52c30ec17f2c6d207eebbfb65b8bd775930b3a22dfce521dcc6436796d06e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_40e52c30ec17f2c6d207eebbfb65b8bd775930b3a22dfce521dcc6436796d06e->enter($__internal_40e52c30ec17f2c6d207eebbfb65b8bd775930b3a22dfce521dcc6436796d06e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "MALrmBundle:Gestion:resume.html.twig"));

        $__internal_0415eda84aaec9b7f2b3e160d44d902a924e5bb9fd9d2f637cb5e3ba28f3e6b0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0415eda84aaec9b7f2b3e160d44d902a924e5bb9fd9d2f637cb5e3ba28f3e6b0->enter($__internal_0415eda84aaec9b7f2b3e160d44d902a924e5bb9fd9d2f637cb5e3ba28f3e6b0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "MALrmBundle:Gestion:resume.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_40e52c30ec17f2c6d207eebbfb65b8bd775930b3a22dfce521dcc6436796d06e->leave($__internal_40e52c30ec17f2c6d207eebbfb65b8bd775930b3a22dfce521dcc6436796d06e_prof);

        
        $__internal_0415eda84aaec9b7f2b3e160d44d902a924e5bb9fd9d2f637cb5e3ba28f3e6b0->leave($__internal_0415eda84aaec9b7f2b3e160d44d902a924e5bb9fd9d2f637cb5e3ba28f3e6b0_prof);

    }

    // line 3
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_46a12ca886275438f7f562af2a4315117f0efeed18d3d743550ed25b9ae6973b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_46a12ca886275438f7f562af2a4315117f0efeed18d3d743550ed25b9ae6973b->enter($__internal_46a12ca886275438f7f562af2a4315117f0efeed18d3d743550ed25b9ae6973b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_b09e2e8f0868d3ab2ec991a1629260220ba4a3beb9027171af4ffb95c2631129 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b09e2e8f0868d3ab2ec991a1629260220ba4a3beb9027171af4ffb95c2631129->enter($__internal_b09e2e8f0868d3ab2ec991a1629260220ba4a3beb9027171af4ffb95c2631129_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 4
        echo "     <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/client.css"), "html", null, true);
        echo "\" rel='stylesheet' type='text/css' />
     <link href=\"";
        // line 5
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("DataTables/media/css/dataTables.bootstrap.min.css"), "html", null, true);
        echo "\" rel='stylesheet' type='text/css' />
 ";
        
        $__internal_b09e2e8f0868d3ab2ec991a1629260220ba4a3beb9027171af4ffb95c2631129->leave($__internal_b09e2e8f0868d3ab2ec991a1629260220ba4a3beb9027171af4ffb95c2631129_prof);

        
        $__internal_46a12ca886275438f7f562af2a4315117f0efeed18d3d743550ed25b9ae6973b->leave($__internal_46a12ca886275438f7f562af2a4315117f0efeed18d3d743550ed25b9ae6973b_prof);

    }

    // line 8
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_cd7a06e5ee8e6d6b0dabb381694128d36ac3df481bda8ac8e7a9a77e7005bd44 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_cd7a06e5ee8e6d6b0dabb381694128d36ac3df481bda8ac8e7a9a77e7005bd44->enter($__internal_cd7a06e5ee8e6d6b0dabb381694128d36ac3df481bda8ac8e7a9a77e7005bd44_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_aca11113685e24948abb3bde2686feac523c086442d39500448075741226eaa5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_aca11113685e24948abb3bde2686feac523c086442d39500448075741226eaa5->enter($__internal_aca11113685e24948abb3bde2686feac523c086442d39500448075741226eaa5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 9
        echo "    <script src =\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("DataTables/media/js/dataTables.bootstrap.min.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
    <script src=\"";
        // line 10
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/tables.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
";
        
        $__internal_aca11113685e24948abb3bde2686feac523c086442d39500448075741226eaa5->leave($__internal_aca11113685e24948abb3bde2686feac523c086442d39500448075741226eaa5_prof);

        
        $__internal_cd7a06e5ee8e6d6b0dabb381694128d36ac3df481bda8ac8e7a9a77e7005bd44->leave($__internal_cd7a06e5ee8e6d6b0dabb381694128d36ac3df481bda8ac8e7a9a77e7005bd44_prof);

    }

    // line 15
    public function block_body($context, array $blocks = array())
    {
        $__internal_5ea47043a10948f39002a2e93d0545c8291fcf3e86193345d62233a3303aeceb = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5ea47043a10948f39002a2e93d0545c8291fcf3e86193345d62233a3303aeceb->enter($__internal_5ea47043a10948f39002a2e93d0545c8291fcf3e86193345d62233a3303aeceb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_57c9f898e6964f7ac53bf3727b52a623b95c787224dd02c03153c719bdb80994 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_57c9f898e6964f7ac53bf3727b52a623b95c787224dd02c03153c719bdb80994->enter($__internal_57c9f898e6964f7ac53bf3727b52a623b95c787224dd02c03153c719bdb80994_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 16
        echo "
    <div class=\"container-fluid\" id=\"header_container\">
        <div class=\"row\">
            <div class=\"col-lg-offset-10\">
                ";
        // line 20
        if ($this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("IS_AUTHENTICATED_REMEMBERED")) {
            // line 21
            echo "                    <i class=\"material-icons\">person</i> Bonjour, ";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "username", array()), "html", null, true);
            echo "--<a href=\"";
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_security_logout");
            echo "\">Déconnexion</a>
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
        </div>
    </div>
    <div class=\"container-fluid\" id=\"main_container\">
    <!-- START TOP NAVBAR-->
    ";
        // line 30
        $this->loadTemplate("navbar.html.twig", "MALrmBundle:Gestion:resume.html.twig", 30)->display($context);
        // line 31
        echo "    <!-- END TOP NAVBAR -->
    <!-- START SIDEBAR-->
    ";
        // line 33
        $this->loadTemplate("sidebar.html.twig", "MALrmBundle:Gestion:resume.html.twig", 33)->display($context);
        // line 34
        echo "    <!-- END SIDEBAR-->

    <div class=\"col-lg-9\" style=\"margin-left: 10px;\">
            <div class=\"row\">
                <h3>LISTE DES CANDIDATS</h3><hr style=\"border: 1px solid darkgray;\">
            </div>
            <div class=\"row\" id=\"head_row\">
                <h5>INTERFACE DE VISUALISATION DES CANDIDATS RECRUTES PAR POSTE:</h5>
            </div>

        <div class=\"row\" style=\"margin-top: 20px\">
            ";
        // line 45
        $context["i"] = 0;
        // line 46
        echo "            <div class=\"panel panel-default\">
                <div class=\"panel-heading\">
                    <h3 class=\"panel-title\">";
        // line 48
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
                        </tr>
                    </thead>
                    ";
        // line 58
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["resumeByPoste"]) ? $context["resumeByPoste"] : $this->getContext($context, "resumeByPoste")));
        foreach ($context['_seq'] as $context["_key"] => $context["resume"]) {
            // line 59
            echo "                        ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($context["resume"]);
            foreach ($context['_seq'] as $context["id"] => $context["candidat"]) {
                // line 60
                echo "                            <tbody>
                            <tr>
                                ";
                // line 62
                $context["i"] = ((isset($context["i"]) ? $context["i"] : $this->getContext($context, "i")) + 1);
                // line 63
                echo "                                <td>";
                echo twig_escape_filter($this->env, (isset($context["i"]) ? $context["i"] : $this->getContext($context, "i")), "html", null, true);
                echo "</td>
                                <td><a href=\"";
                // line 64
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("ma_lrm_gestion_detail", array("id" => $context["id"])), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $this->getAttribute($context["candidat"], 1, array(), "array"), "html", null, true);
                echo "</a></td>
                                <td>";
                // line 65
                echo twig_escape_filter($this->env, $this->getAttribute($context["candidat"], 2, array(), "array"), "html", null, true);
                echo "</td>
                            </tr>
                            </tbody>
                        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['id'], $context['candidat'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 69
            echo "                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['resume'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 70
        echo "                </table>
            </div>
        </div>

        <div class=\"row\">
            <div class=\"col-lg-offset-11\">
                <a href=\"";
        // line 76
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("ma_lrm_gestion_index");
        echo "\"><i class=\"material-icons\" id=\"previous\">skip_previous</i></a>
            </div>
        </div>
    </div>



";
        
        $__internal_57c9f898e6964f7ac53bf3727b52a623b95c787224dd02c03153c719bdb80994->leave($__internal_57c9f898e6964f7ac53bf3727b52a623b95c787224dd02c03153c719bdb80994_prof);

        
        $__internal_5ea47043a10948f39002a2e93d0545c8291fcf3e86193345d62233a3303aeceb->leave($__internal_5ea47043a10948f39002a2e93d0545c8291fcf3e86193345d62233a3303aeceb_prof);

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
        return array (  224 => 76,  216 => 70,  210 => 69,  200 => 65,  194 => 64,  189 => 63,  187 => 62,  183 => 60,  178 => 59,  174 => 58,  159 => 48,  155 => 46,  153 => 45,  140 => 34,  138 => 33,  134 => 31,  132 => 30,  125 => 25,  119 => 23,  111 => 21,  109 => 20,  103 => 16,  94 => 15,  82 => 10,  77 => 9,  68 => 8,  56 => 5,  51 => 4,  42 => 3,  11 => 1,);
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
            <div class=\"col-lg-offset-10\">
                {% if is_granted(\"IS_AUTHENTICATED_REMEMBERED\") %}
                    <i class=\"material-icons\">person</i> Bonjour, {{ app.user.username }}--<a href=\"{{ path('fos_user_security_logout') }}\">Déconnexion</a>
                {% else %}
                    <a href=\"{{ path('fos_user_security_login') }}\">Connexion</a>
                {% endif %}
            </div>
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
                <h5>INTERFACE DE VISUALISATION DES CANDIDATS RECRUTES PAR POSTE:</h5>
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
