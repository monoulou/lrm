<?php

/* MALrmBundle:Gestion:index.html.twig */
class __TwigTemplate_00690b97bc6ac0ceb1b54ddd9a13e8d907e81b0faa7de7728c237ee0228fdcd7 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::base.html.twig", "MALrmBundle:Gestion:index.html.twig", 1);
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
        $__internal_0cf6ecdb5e46194872eda45fca6e30f427a038cf925ed987520ee1cf04514e23 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0cf6ecdb5e46194872eda45fca6e30f427a038cf925ed987520ee1cf04514e23->enter($__internal_0cf6ecdb5e46194872eda45fca6e30f427a038cf925ed987520ee1cf04514e23_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "MALrmBundle:Gestion:index.html.twig"));

        $__internal_7416517b6d3efde65fffaebd503365f1acf53878453542956473aaf14af8ad34 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7416517b6d3efde65fffaebd503365f1acf53878453542956473aaf14af8ad34->enter($__internal_7416517b6d3efde65fffaebd503365f1acf53878453542956473aaf14af8ad34_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "MALrmBundle:Gestion:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_0cf6ecdb5e46194872eda45fca6e30f427a038cf925ed987520ee1cf04514e23->leave($__internal_0cf6ecdb5e46194872eda45fca6e30f427a038cf925ed987520ee1cf04514e23_prof);

        
        $__internal_7416517b6d3efde65fffaebd503365f1acf53878453542956473aaf14af8ad34->leave($__internal_7416517b6d3efde65fffaebd503365f1acf53878453542956473aaf14af8ad34_prof);

    }

    // line 3
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_5393b672f0c3240b6394d3db4288ae65ba3e5ec00e11b7a234dfc4011a67542d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5393b672f0c3240b6394d3db4288ae65ba3e5ec00e11b7a234dfc4011a67542d->enter($__internal_5393b672f0c3240b6394d3db4288ae65ba3e5ec00e11b7a234dfc4011a67542d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_cec92fd32716dbd8cff08d7944b4836b086576c80e8d0516e75d8585045c9208 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cec92fd32716dbd8cff08d7944b4836b086576c80e8d0516e75d8585045c9208->enter($__internal_cec92fd32716dbd8cff08d7944b4836b086576c80e8d0516e75d8585045c9208_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 4
        echo "     <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/client.css"), "html", null, true);
        echo "\" rel='stylesheet' type='text/css' />
     <link href=\"";
        // line 5
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("DataTables/media/css/dataTables.bootstrap.min.css"), "html", null, true);
        echo "\" rel='stylesheet' type='text/css' />
 ";
        
        $__internal_cec92fd32716dbd8cff08d7944b4836b086576c80e8d0516e75d8585045c9208->leave($__internal_cec92fd32716dbd8cff08d7944b4836b086576c80e8d0516e75d8585045c9208_prof);

        
        $__internal_5393b672f0c3240b6394d3db4288ae65ba3e5ec00e11b7a234dfc4011a67542d->leave($__internal_5393b672f0c3240b6394d3db4288ae65ba3e5ec00e11b7a234dfc4011a67542d_prof);

    }

    // line 8
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_477cd982fa9c829398923c6bab3bab067cbcafc543b8206950fb6a4183328d1f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_477cd982fa9c829398923c6bab3bab067cbcafc543b8206950fb6a4183328d1f->enter($__internal_477cd982fa9c829398923c6bab3bab067cbcafc543b8206950fb6a4183328d1f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_e11e429dfb50e1267bc271cf625871413cd2f2f9c9e750a046c88dff0421b129 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e11e429dfb50e1267bc271cf625871413cd2f2f9c9e750a046c88dff0421b129->enter($__internal_e11e429dfb50e1267bc271cf625871413cd2f2f9c9e750a046c88dff0421b129_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 9
        echo "    <script src =\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("DataTables/media/js/dataTables.bootstrap.min.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
    <script src=\"";
        // line 10
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/tables.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
";
        
        $__internal_e11e429dfb50e1267bc271cf625871413cd2f2f9c9e750a046c88dff0421b129->leave($__internal_e11e429dfb50e1267bc271cf625871413cd2f2f9c9e750a046c88dff0421b129_prof);

        
        $__internal_477cd982fa9c829398923c6bab3bab067cbcafc543b8206950fb6a4183328d1f->leave($__internal_477cd982fa9c829398923c6bab3bab067cbcafc543b8206950fb6a4183328d1f_prof);

    }

    // line 15
    public function block_body($context, array $blocks = array())
    {
        $__internal_05d00099938ec64775142afd4020313d64e8b28eceeb8eacbba1793eeb237ff9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_05d00099938ec64775142afd4020313d64e8b28eceeb8eacbba1793eeb237ff9->enter($__internal_05d00099938ec64775142afd4020313d64e8b28eceeb8eacbba1793eeb237ff9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_2109d42ff88bf21483e0a71092b3aa1d1ce04ed56c510d97c9b156c4af2f908d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2109d42ff88bf21483e0a71092b3aa1d1ce04ed56c510d97c9b156c4af2f908d->enter($__internal_2109d42ff88bf21483e0a71092b3aa1d1ce04ed56c510d97c9b156c4af2f908d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        $this->loadTemplate("navbar.html.twig", "MALrmBundle:Gestion:index.html.twig", 30)->display($context);
        // line 31
        echo "    <!-- END TOP NAVBAR -->
    <!-- START SIDEBAR-->
    ";
        // line 33
        $this->loadTemplate("sidebar.html.twig", "MALrmBundle:Gestion:index.html.twig", 33)->display($context);
        // line 34
        echo "    <!-- END SIDEBAR-->

    <div class=\"col-lg-9\" style=\"margin-left: 10px;\">
        <div class=\"row\">
            <h3>SUIVI DES OFFRES</h3><hr style=\"border: 1px solid darkgray;\">
        </div>
        <div class=\"row\" id=\"head_row\">
            <h5>INTERFACE DE VISUALISATION DES OFFRES POURVUES:</h5>
        </div>

        ";
        // line 44
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session", array()), "flashBag", array()), "get", array(0 => "notice"), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["flash_message"]) {
            // line 45
            echo "            <div class=\"alert alert-info\" id=\"flash_message\">
                <i class=\"icon icon-info-circle icon-lg\"></i>
                <strong>Info !</strong> ";
            // line 47
            echo twig_escape_filter($this->env, $context["flash_message"], "html", null, true);
            echo "<i>alert-info</i>.
            </div>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['flash_message'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 50
        echo "
        <div class=\"row\" style=\"margin-top: 20px\">
            <table id=\"client_table\" class=\"table table-striped table-bordered\" cellspacing=\"0\" width=\"100%\">
                <thead>
                <tr>
                    <th>Offre</th>
                    <th>Entreprise</th>
                    <th>Postes à pourvoir</th>
                    <th>Postes pourvus</th>
                    <th>Postes restant</th>
                </tr>
                </thead>
                <tfoot>
                <tr>
                    <th>Offre</th>
                    <th>Entreprise</th>
                    <th>Postes à pourvoir</th>
                    <th>Postes pourvus</th>
                    <th>Postes restant</th>
                </tr>
                </tfoot>
                <tbody>
                ";
        // line 72
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["suiviOffre"]) ? $context["suiviOffre"] : $this->getContext($context, "suiviOffre")));
        foreach ($context['_seq'] as $context["id"] => $context["offre"]) {
            // line 73
            echo "                    <tr>
                        <td> <a href=\"";
            // line 74
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("ma_lrm_gestion_resume", array("id" => $context["id"])), "html", null, true);
            echo "\" >";
            echo twig_escape_filter($this->env, $this->getAttribute($context["offre"], 1, array(), "array"), "html", null, true);
            echo "</a></td>
                        <td>";
            // line 75
            echo twig_escape_filter($this->env, $this->getAttribute($context["offre"], 2, array(), "array"), "html", null, true);
            echo "</td>
                        <td>";
            // line 76
            echo twig_escape_filter($this->env, $this->getAttribute($context["offre"], 3, array(), "array"), "html", null, true);
            echo "</td>
                        <td>";
            // line 77
            echo twig_escape_filter($this->env, $this->getAttribute($context["offre"], 4, array(), "array"), "html", null, true);
            echo "</td>
                        <td>";
            // line 78
            echo twig_escape_filter($this->env, $this->getAttribute($context["offre"], 5, array(), "array"), "html", null, true);
            echo "</td>
                    </tr>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['id'], $context['offre'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 81
        echo "
                </tbody>
            </table>
        </div>
    </div>



";
        
        $__internal_2109d42ff88bf21483e0a71092b3aa1d1ce04ed56c510d97c9b156c4af2f908d->leave($__internal_2109d42ff88bf21483e0a71092b3aa1d1ce04ed56c510d97c9b156c4af2f908d_prof);

        
        $__internal_05d00099938ec64775142afd4020313d64e8b28eceeb8eacbba1793eeb237ff9->leave($__internal_05d00099938ec64775142afd4020313d64e8b28eceeb8eacbba1793eeb237ff9_prof);

    }

    public function getTemplateName()
    {
        return "MALrmBundle:Gestion:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  227 => 81,  218 => 78,  214 => 77,  210 => 76,  206 => 75,  200 => 74,  197 => 73,  193 => 72,  169 => 50,  160 => 47,  156 => 45,  152 => 44,  140 => 34,  138 => 33,  134 => 31,  132 => 30,  125 => 25,  119 => 23,  111 => 21,  109 => 20,  103 => 16,  94 => 15,  82 => 10,  77 => 9,  68 => 8,  56 => 5,  51 => 4,  42 => 3,  11 => 1,);
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
            <h3>SUIVI DES OFFRES</h3><hr style=\"border: 1px solid darkgray;\">
        </div>
        <div class=\"row\" id=\"head_row\">
            <h5>INTERFACE DE VISUALISATION DES OFFRES POURVUES:</h5>
        </div>

        {% for flash_message in app.session.flashBag.get('notice') %}
            <div class=\"alert alert-info\" id=\"flash_message\">
                <i class=\"icon icon-info-circle icon-lg\"></i>
                <strong>Info !</strong> {{ flash_message }}<i>alert-info</i>.
            </div>
        {% endfor %}

        <div class=\"row\" style=\"margin-top: 20px\">
            <table id=\"client_table\" class=\"table table-striped table-bordered\" cellspacing=\"0\" width=\"100%\">
                <thead>
                <tr>
                    <th>Offre</th>
                    <th>Entreprise</th>
                    <th>Postes à pourvoir</th>
                    <th>Postes pourvus</th>
                    <th>Postes restant</th>
                </tr>
                </thead>
                <tfoot>
                <tr>
                    <th>Offre</th>
                    <th>Entreprise</th>
                    <th>Postes à pourvoir</th>
                    <th>Postes pourvus</th>
                    <th>Postes restant</th>
                </tr>
                </tfoot>
                <tbody>
                {% for id, offre in suiviOffre %}
                    <tr>
                        <td> <a href=\"{{ path('ma_lrm_gestion_resume', { 'id': id }) }}\" >{{ offre[1] }}</a></td>
                        <td>{{ offre[2] }}</td>
                        <td>{{ offre[3] }}</td>
                        <td>{{ offre[4] }}</td>
                        <td>{{ offre[5] }}</td>
                    </tr>
                {% endfor %}

                </tbody>
            </table>
        </div>
    </div>



{% endblock %}", "MALrmBundle:Gestion:index.html.twig", "C:\\wamp64\\www\\ligne_rh\\src\\MA\\LrmBundle/Resources/views/Gestion/index.html.twig");
    }
}
