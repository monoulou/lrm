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
        $__internal_4fdef792b7174382eb49e94d90ffa264c1bfabf491da49cb2ddb161f9e0156ba = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4fdef792b7174382eb49e94d90ffa264c1bfabf491da49cb2ddb161f9e0156ba->enter($__internal_4fdef792b7174382eb49e94d90ffa264c1bfabf491da49cb2ddb161f9e0156ba_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "MALrmBundle:Gestion:resume.html.twig"));

        $__internal_693087be189ca1cc27ced31ac95a94701ce741ef720da69dae2f310cb84d3bfd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_693087be189ca1cc27ced31ac95a94701ce741ef720da69dae2f310cb84d3bfd->enter($__internal_693087be189ca1cc27ced31ac95a94701ce741ef720da69dae2f310cb84d3bfd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "MALrmBundle:Gestion:resume.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_4fdef792b7174382eb49e94d90ffa264c1bfabf491da49cb2ddb161f9e0156ba->leave($__internal_4fdef792b7174382eb49e94d90ffa264c1bfabf491da49cb2ddb161f9e0156ba_prof);

        
        $__internal_693087be189ca1cc27ced31ac95a94701ce741ef720da69dae2f310cb84d3bfd->leave($__internal_693087be189ca1cc27ced31ac95a94701ce741ef720da69dae2f310cb84d3bfd_prof);

    }

    // line 3
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_54f3a61a4633d5e2ac2c72e97e4f444cdf1527ff0eee692d4057fbb6d7d3cfdf = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_54f3a61a4633d5e2ac2c72e97e4f444cdf1527ff0eee692d4057fbb6d7d3cfdf->enter($__internal_54f3a61a4633d5e2ac2c72e97e4f444cdf1527ff0eee692d4057fbb6d7d3cfdf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_e1bb1978997cb75b34ce2e3f15fb29652cb775e4a4b2b7c7c9775d00cd75897d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e1bb1978997cb75b34ce2e3f15fb29652cb775e4a4b2b7c7c9775d00cd75897d->enter($__internal_e1bb1978997cb75b34ce2e3f15fb29652cb775e4a4b2b7c7c9775d00cd75897d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 4
        echo "     <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/client.css"), "html", null, true);
        echo "\" rel='stylesheet' type='text/css' />
     <link href=\"";
        // line 5
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("DataTables/media/css/dataTables.bootstrap.min.css"), "html", null, true);
        echo "\" rel='stylesheet' type='text/css' />
 ";
        
        $__internal_e1bb1978997cb75b34ce2e3f15fb29652cb775e4a4b2b7c7c9775d00cd75897d->leave($__internal_e1bb1978997cb75b34ce2e3f15fb29652cb775e4a4b2b7c7c9775d00cd75897d_prof);

        
        $__internal_54f3a61a4633d5e2ac2c72e97e4f444cdf1527ff0eee692d4057fbb6d7d3cfdf->leave($__internal_54f3a61a4633d5e2ac2c72e97e4f444cdf1527ff0eee692d4057fbb6d7d3cfdf_prof);

    }

    // line 8
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_19e660372c8171971038211b2cd18bbc1bc832ed1346a86cbd81e4a90080a1ee = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_19e660372c8171971038211b2cd18bbc1bc832ed1346a86cbd81e4a90080a1ee->enter($__internal_19e660372c8171971038211b2cd18bbc1bc832ed1346a86cbd81e4a90080a1ee_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_0e39d00f899f8293942fe57f13d759a17da0c888631c7ccffbc652d84c8fe7c3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0e39d00f899f8293942fe57f13d759a17da0c888631c7ccffbc652d84c8fe7c3->enter($__internal_0e39d00f899f8293942fe57f13d759a17da0c888631c7ccffbc652d84c8fe7c3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 9
        echo "    <script src =\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("DataTables/media/js/dataTables.bootstrap.min.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
    <script src=\"";
        // line 10
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/tables.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
";
        
        $__internal_0e39d00f899f8293942fe57f13d759a17da0c888631c7ccffbc652d84c8fe7c3->leave($__internal_0e39d00f899f8293942fe57f13d759a17da0c888631c7ccffbc652d84c8fe7c3_prof);

        
        $__internal_19e660372c8171971038211b2cd18bbc1bc832ed1346a86cbd81e4a90080a1ee->leave($__internal_19e660372c8171971038211b2cd18bbc1bc832ed1346a86cbd81e4a90080a1ee_prof);

    }

    // line 15
    public function block_body($context, array $blocks = array())
    {
        $__internal_2866c0e49c3bdc92acd5c4e287dac792632b568f4fa0b6c736d1ceb1c4dd8c22 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2866c0e49c3bdc92acd5c4e287dac792632b568f4fa0b6c736d1ceb1c4dd8c22->enter($__internal_2866c0e49c3bdc92acd5c4e287dac792632b568f4fa0b6c736d1ceb1c4dd8c22_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_fc38b0444a630a0320a6ae91aed9fb161f8a8faf022c29d4a71ac00e0bbf3853 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fc38b0444a630a0320a6ae91aed9fb161f8a8faf022c29d4a71ac00e0bbf3853->enter($__internal_fc38b0444a630a0320a6ae91aed9fb161f8a8faf022c29d4a71ac00e0bbf3853_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_fc38b0444a630a0320a6ae91aed9fb161f8a8faf022c29d4a71ac00e0bbf3853->leave($__internal_fc38b0444a630a0320a6ae91aed9fb161f8a8faf022c29d4a71ac00e0bbf3853_prof);

        
        $__internal_2866c0e49c3bdc92acd5c4e287dac792632b568f4fa0b6c736d1ceb1c4dd8c22->leave($__internal_2866c0e49c3bdc92acd5c4e287dac792632b568f4fa0b6c736d1ceb1c4dd8c22_prof);

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
