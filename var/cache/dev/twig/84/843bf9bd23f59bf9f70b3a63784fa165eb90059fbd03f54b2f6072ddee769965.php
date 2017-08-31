<?php

/* @MALrm/Gestion/resume.html.twig */
class __TwigTemplate_fc3545bed96f55310a2937e1fd58f57a6215cb15bab0b446310ed1d8157980ed extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::base.html.twig", "@MALrm/Gestion/resume.html.twig", 1);
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
        $__internal_4adcaf7da4250bdb0d67e343af532cd36e4d12e942d2e8801c57a8914cde7982 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4adcaf7da4250bdb0d67e343af532cd36e4d12e942d2e8801c57a8914cde7982->enter($__internal_4adcaf7da4250bdb0d67e343af532cd36e4d12e942d2e8801c57a8914cde7982_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@MALrm/Gestion/resume.html.twig"));

        $__internal_559156efbd85ecb8de65f2cfa853a42e0ef8716c59761b110d94ba074e7fb9be = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_559156efbd85ecb8de65f2cfa853a42e0ef8716c59761b110d94ba074e7fb9be->enter($__internal_559156efbd85ecb8de65f2cfa853a42e0ef8716c59761b110d94ba074e7fb9be_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@MALrm/Gestion/resume.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_4adcaf7da4250bdb0d67e343af532cd36e4d12e942d2e8801c57a8914cde7982->leave($__internal_4adcaf7da4250bdb0d67e343af532cd36e4d12e942d2e8801c57a8914cde7982_prof);

        
        $__internal_559156efbd85ecb8de65f2cfa853a42e0ef8716c59761b110d94ba074e7fb9be->leave($__internal_559156efbd85ecb8de65f2cfa853a42e0ef8716c59761b110d94ba074e7fb9be_prof);

    }

    // line 3
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_ca71dd013e00a6458e3df5040d7bb5bc12bc9c6b8246cbe99b99d88afb324bf7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ca71dd013e00a6458e3df5040d7bb5bc12bc9c6b8246cbe99b99d88afb324bf7->enter($__internal_ca71dd013e00a6458e3df5040d7bb5bc12bc9c6b8246cbe99b99d88afb324bf7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_4e6597cb38b7fd513ba6b1c9332e8f1722d743f5bbd4c516491d5090a91efd77 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4e6597cb38b7fd513ba6b1c9332e8f1722d743f5bbd4c516491d5090a91efd77->enter($__internal_4e6597cb38b7fd513ba6b1c9332e8f1722d743f5bbd4c516491d5090a91efd77_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 4
        echo "     <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/client.css"), "html", null, true);
        echo "\" rel='stylesheet' type='text/css' />
     <link href=\"";
        // line 5
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("DataTables/media/css/dataTables.bootstrap.min.css"), "html", null, true);
        echo "\" rel='stylesheet' type='text/css' />
 ";
        
        $__internal_4e6597cb38b7fd513ba6b1c9332e8f1722d743f5bbd4c516491d5090a91efd77->leave($__internal_4e6597cb38b7fd513ba6b1c9332e8f1722d743f5bbd4c516491d5090a91efd77_prof);

        
        $__internal_ca71dd013e00a6458e3df5040d7bb5bc12bc9c6b8246cbe99b99d88afb324bf7->leave($__internal_ca71dd013e00a6458e3df5040d7bb5bc12bc9c6b8246cbe99b99d88afb324bf7_prof);

    }

    // line 8
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_1f31c6308537f87609be49fe6bcf02b14110c2755341ef3326aeedc8598ccc5b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1f31c6308537f87609be49fe6bcf02b14110c2755341ef3326aeedc8598ccc5b->enter($__internal_1f31c6308537f87609be49fe6bcf02b14110c2755341ef3326aeedc8598ccc5b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_1f011633943cb7f624e7b146e6b94e5956c2c30608c989c8fd51a853f071d177 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1f011633943cb7f624e7b146e6b94e5956c2c30608c989c8fd51a853f071d177->enter($__internal_1f011633943cb7f624e7b146e6b94e5956c2c30608c989c8fd51a853f071d177_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 9
        echo "    <script src =\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("DataTables/media/js/dataTables.bootstrap.min.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
    <script src=\"";
        // line 10
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/tables.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
";
        
        $__internal_1f011633943cb7f624e7b146e6b94e5956c2c30608c989c8fd51a853f071d177->leave($__internal_1f011633943cb7f624e7b146e6b94e5956c2c30608c989c8fd51a853f071d177_prof);

        
        $__internal_1f31c6308537f87609be49fe6bcf02b14110c2755341ef3326aeedc8598ccc5b->leave($__internal_1f31c6308537f87609be49fe6bcf02b14110c2755341ef3326aeedc8598ccc5b_prof);

    }

    // line 15
    public function block_body($context, array $blocks = array())
    {
        $__internal_7d573f27f683a70cb2f3d61b3a5538cedacc0116371d847018e8b0eeea0a9220 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7d573f27f683a70cb2f3d61b3a5538cedacc0116371d847018e8b0eeea0a9220->enter($__internal_7d573f27f683a70cb2f3d61b3a5538cedacc0116371d847018e8b0eeea0a9220_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_8a0ef875c1e11d9495ad39cd61ecad91164efd6c6458160f52335a2f6a38479e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8a0ef875c1e11d9495ad39cd61ecad91164efd6c6458160f52335a2f6a38479e->enter($__internal_8a0ef875c1e11d9495ad39cd61ecad91164efd6c6458160f52335a2f6a38479e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        $this->loadTemplate("navbar.html.twig", "@MALrm/Gestion/resume.html.twig", 30)->display($context);
        // line 31
        echo "    <!-- END TOP NAVBAR -->
    <!-- START SIDEBAR-->
    ";
        // line 33
        $this->loadTemplate("sidebar.html.twig", "@MALrm/Gestion/resume.html.twig", 33)->display($context);
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
        
        $__internal_8a0ef875c1e11d9495ad39cd61ecad91164efd6c6458160f52335a2f6a38479e->leave($__internal_8a0ef875c1e11d9495ad39cd61ecad91164efd6c6458160f52335a2f6a38479e_prof);

        
        $__internal_7d573f27f683a70cb2f3d61b3a5538cedacc0116371d847018e8b0eeea0a9220->leave($__internal_7d573f27f683a70cb2f3d61b3a5538cedacc0116371d847018e8b0eeea0a9220_prof);

    }

    public function getTemplateName()
    {
        return "@MALrm/Gestion/resume.html.twig";
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



{% endblock %}", "@MALrm/Gestion/resume.html.twig", "C:\\wamp64\\www\\ligne_rh\\src\\MA\\LrmBundle\\Resources\\views\\Gestion\\resume.html.twig");
    }
}
