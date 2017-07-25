<?php

/* MALrmBundle:Candidat:index.html.twig */
class __TwigTemplate_5c1402f488dc179520314c61c014a89dc9c0305c68422fbf0ecf7943fbbc41e8 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::base.html.twig", "MALrmBundle:Candidat:index.html.twig", 1);
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
        $__internal_c7c8314a52fad6057dcbd4a5e519b3b302d433185002f5e043e7eb196274f27d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c7c8314a52fad6057dcbd4a5e519b3b302d433185002f5e043e7eb196274f27d->enter($__internal_c7c8314a52fad6057dcbd4a5e519b3b302d433185002f5e043e7eb196274f27d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "MALrmBundle:Candidat:index.html.twig"));

        $__internal_a710764b703730abc8dcf74170388abe3c030eaf5d16dda590dc28a603f71245 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a710764b703730abc8dcf74170388abe3c030eaf5d16dda590dc28a603f71245->enter($__internal_a710764b703730abc8dcf74170388abe3c030eaf5d16dda590dc28a603f71245_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "MALrmBundle:Candidat:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_c7c8314a52fad6057dcbd4a5e519b3b302d433185002f5e043e7eb196274f27d->leave($__internal_c7c8314a52fad6057dcbd4a5e519b3b302d433185002f5e043e7eb196274f27d_prof);

        
        $__internal_a710764b703730abc8dcf74170388abe3c030eaf5d16dda590dc28a603f71245->leave($__internal_a710764b703730abc8dcf74170388abe3c030eaf5d16dda590dc28a603f71245_prof);

    }

    // line 3
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_212239813423f808149f3627b925cfa7a955830e865044d05974d3f8d23d9fad = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_212239813423f808149f3627b925cfa7a955830e865044d05974d3f8d23d9fad->enter($__internal_212239813423f808149f3627b925cfa7a955830e865044d05974d3f8d23d9fad_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_c44130cb797ca413a5986943146e5eec51606e3297bf6b90639570094d4762bb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c44130cb797ca413a5986943146e5eec51606e3297bf6b90639570094d4762bb->enter($__internal_c44130cb797ca413a5986943146e5eec51606e3297bf6b90639570094d4762bb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 4
        echo "     <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/client.css"), "html", null, true);
        echo "\" rel='stylesheet' type='text/css' />
     <link href=\"";
        // line 5
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("DataTables/media/css/dataTables.bootstrap.min.css"), "html", null, true);
        echo "\" rel='stylesheet' type='text/css' />
 ";
        
        $__internal_c44130cb797ca413a5986943146e5eec51606e3297bf6b90639570094d4762bb->leave($__internal_c44130cb797ca413a5986943146e5eec51606e3297bf6b90639570094d4762bb_prof);

        
        $__internal_212239813423f808149f3627b925cfa7a955830e865044d05974d3f8d23d9fad->leave($__internal_212239813423f808149f3627b925cfa7a955830e865044d05974d3f8d23d9fad_prof);

    }

    // line 9
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_ecc9a2dcbe8f3d958f91e4218981cfba4a97ad6bea98bcf3d93ddfbf6d95a61c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ecc9a2dcbe8f3d958f91e4218981cfba4a97ad6bea98bcf3d93ddfbf6d95a61c->enter($__internal_ecc9a2dcbe8f3d958f91e4218981cfba4a97ad6bea98bcf3d93ddfbf6d95a61c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_d1a3d3b269d224797dfdeeec076436996146944f83e4d80a461411393b61e9db = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d1a3d3b269d224797dfdeeec076436996146944f83e4d80a461411393b61e9db->enter($__internal_d1a3d3b269d224797dfdeeec076436996146944f83e4d80a461411393b61e9db_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 10
        echo "        <script src =\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("DataTables/media/js/dataTables.bootstrap.min.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
        <script src=\"";
        // line 11
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/tables.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
    ";
        
        $__internal_d1a3d3b269d224797dfdeeec076436996146944f83e4d80a461411393b61e9db->leave($__internal_d1a3d3b269d224797dfdeeec076436996146944f83e4d80a461411393b61e9db_prof);

        
        $__internal_ecc9a2dcbe8f3d958f91e4218981cfba4a97ad6bea98bcf3d93ddfbf6d95a61c->leave($__internal_ecc9a2dcbe8f3d958f91e4218981cfba4a97ad6bea98bcf3d93ddfbf6d95a61c_prof);

    }

    // line 16
    public function block_body($context, array $blocks = array())
    {
        $__internal_27122219f7f607152ebf9b42579b085475f1d898a0547a28d83215428edd706e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_27122219f7f607152ebf9b42579b085475f1d898a0547a28d83215428edd706e->enter($__internal_27122219f7f607152ebf9b42579b085475f1d898a0547a28d83215428edd706e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_55f98c6617e37303e125abefeab5ad646b746dc033a425b2210bf8df97cbcde6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_55f98c6617e37303e125abefeab5ad646b746dc033a425b2210bf8df97cbcde6->enter($__internal_55f98c6617e37303e125abefeab5ad646b746dc033a425b2210bf8df97cbcde6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 17
        echo "
    <div class=\"container-fluid\" id=\"header_container\">
        <div class=\"row\">
            <div class=\"col-lg-offset-9\">
                ";
        // line 21
        if ($this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("IS_AUTHENTICATED_REMEMBERED")) {
            // line 22
            echo "                    Connecté en tant que ";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "username", array()), "html", null, true);
            echo "--<a href=\"";
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_security_logout");
            echo "\">Déconnexion</a>
                ";
        } else {
            // line 24
            echo "                    <a href=\"";
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_security_login");
            echo "\">Connexion</a>
                ";
        }
        // line 26
        echo "            </div>
        </div>
    </div>
    <div class=\"container-fluid\" id=\"main_container\">
    <!-- START TOP NAVBAR-->
    ";
        // line 31
        $this->loadTemplate("navbar.html.twig", "MALrmBundle:Candidat:index.html.twig", 31)->display($context);
        // line 32
        echo "    <!-- END TOP NAVBAR -->
    <!-- START SIDEBAR-->
    ";
        // line 34
        $this->loadTemplate("sidebar.html.twig", "MALrmBundle:Candidat:index.html.twig", 34)->display($context);
        // line 35
        echo "    <!-- END SIDEBAR-->

    <div class=\"col-lg-9\" style=\"margin-left: 10px;\">
        <div class=\"row\">
            <h3>LISTE DES CANDIDATS</h3><hr style=\"border: 1px solid darkgray;\">
        </div>
        <div class=\"row\" id=\"head_row\">
            <h5>INTERFACE DE VISUALISATION DES CANDIDATS:</h5>
        </div>

        ";
        // line 45
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session", array()), "flashBag", array()), "get", array(0 => "notice"), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["flash_message"]) {
            // line 46
            echo "            <div class=\"alert alert-info\" id=\"flash_message\">
                <i class=\"icon icon-info-circle icon-lg\"></i>
                <strong>Info !</strong> ";
            // line 48
            echo twig_escape_filter($this->env, $context["flash_message"], "html", null, true);
            echo "<i>alert-info</i>.
            </div>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['flash_message'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 51
        echo "
        <div class=\"row\" style=\"margin-top: 20px;\">
            <table id=\"client_table\" class=\"table table-striped table-bordered\" cellspacing=\"0\" width=\"100%\">
                <thead>
                <tr>
                    <th>Candidat</th>
                    <th>Offre d'emploi</th>
                    <th>Entreprise</th>
                    <th>Action</th>
                </tr>
                </thead>
                <tfoot>
                <tr>
                    <th>Candidat</th>
                    <th>Offre d'emploi</th>
                    <th>Entreprise</th>
                    <th>Action</th>
                </tr>
                </tfoot>
                <tbody>
                ";
        // line 71
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["candidats"]) ? $context["candidats"] : $this->getContext($context, "candidats")));
        foreach ($context['_seq'] as $context["_key"] => $context["candidat"]) {
            // line 72
            echo "                    <tr>
                        <td><a href=\"";
            // line 73
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("ma_lrm_candidat_show", array("id" => $this->getAttribute($context["candidat"], "id", array()))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["candidat"], "nom", array()), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, $this->getAttribute($context["candidat"], "prenom", array()), "html", null, true);
            echo "</a></td>
                        <td>";
            // line 74
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["candidat"], "emploi", array()), "intitule", array()), "html", null, true);
            echo "</td>
                        ";
            // line 75
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["nomClient"]) ? $context["nomClient"] : $this->getContext($context, "nomClient")));
            foreach ($context['_seq'] as $context["idOffre"] => $context["client"]) {
                // line 76
                echo "                            ";
                if (($context["idOffre"] == $this->getAttribute($this->getAttribute($context["candidat"], "emploi", array()), "id", array()))) {
                    // line 77
                    echo "                                <td> ";
                    echo twig_escape_filter($this->env, $context["client"], "html", null, true);
                    echo "</td>
                            ";
                }
                // line 79
                echo "                        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['idOffre'], $context['client'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 80
            echo "                        <td><a href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("ma_lrm_candidat_edit", array("id" => $this->getAttribute($context["candidat"], "id", array()))), "html", null, true);
            echo "\">Modifier</a>/<a href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("ma_lrm_candidat_delete", array("id" => $this->getAttribute($context["candidat"], "id", array()))), "html", null, true);
            echo "\" onclick=\"return confirm('Souhaitez-vous confirmer la suppression de ce candidat ?')\";>Supprimer</a></td>
                    </tr>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['candidat'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 83
        echo "                </tbody>
            </table>
        </div>
    </div>


";
        
        $__internal_55f98c6617e37303e125abefeab5ad646b746dc033a425b2210bf8df97cbcde6->leave($__internal_55f98c6617e37303e125abefeab5ad646b746dc033a425b2210bf8df97cbcde6_prof);

        
        $__internal_27122219f7f607152ebf9b42579b085475f1d898a0547a28d83215428edd706e->leave($__internal_27122219f7f607152ebf9b42579b085475f1d898a0547a28d83215428edd706e_prof);

    }

    public function getTemplateName()
    {
        return "MALrmBundle:Candidat:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  241 => 83,  229 => 80,  223 => 79,  217 => 77,  214 => 76,  210 => 75,  206 => 74,  198 => 73,  195 => 72,  191 => 71,  169 => 51,  160 => 48,  156 => 46,  152 => 45,  140 => 35,  138 => 34,  134 => 32,  132 => 31,  125 => 26,  119 => 24,  111 => 22,  109 => 21,  103 => 17,  94 => 16,  82 => 11,  77 => 10,  68 => 9,  56 => 5,  51 => 4,  42 => 3,  11 => 1,);
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
            <div class=\"col-lg-offset-9\">
                {% if is_granted(\"IS_AUTHENTICATED_REMEMBERED\") %}
                    Connecté en tant que {{ app.user.username }}--<a href=\"{{ path('fos_user_security_logout') }}\">Déconnexion</a>
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
            <h5>INTERFACE DE VISUALISATION DES CANDIDATS:</h5>
        </div>

        {% for flash_message in app.session.flashBag.get('notice') %}
            <div class=\"alert alert-info\" id=\"flash_message\">
                <i class=\"icon icon-info-circle icon-lg\"></i>
                <strong>Info !</strong> {{ flash_message }}<i>alert-info</i>.
            </div>
        {% endfor %}

        <div class=\"row\" style=\"margin-top: 20px;\">
            <table id=\"client_table\" class=\"table table-striped table-bordered\" cellspacing=\"0\" width=\"100%\">
                <thead>
                <tr>
                    <th>Candidat</th>
                    <th>Offre d'emploi</th>
                    <th>Entreprise</th>
                    <th>Action</th>
                </tr>
                </thead>
                <tfoot>
                <tr>
                    <th>Candidat</th>
                    <th>Offre d'emploi</th>
                    <th>Entreprise</th>
                    <th>Action</th>
                </tr>
                </tfoot>
                <tbody>
                {% for candidat in candidats %}
                    <tr>
                        <td><a href=\"{{ path('ma_lrm_candidat_show', { 'id': candidat.id }) }}\">{{ candidat.nom }} {{ candidat.prenom }}</a></td>
                        <td>{{ candidat.emploi.intitule }}</td>
                        {% for idOffre, client in nomClient %}
                            {% if idOffre == candidat.emploi.id      %}
                                <td> {{ client }}</td>
                            {% endif %}
                        {% endfor %}
                        <td><a href=\"{{ path ('ma_lrm_candidat_edit', { 'id': candidat.id }) }}\">Modifier</a>/<a href=\"{{ path ('ma_lrm_candidat_delete', { 'id': candidat.id }) }}\" onclick=\"return confirm('Souhaitez-vous confirmer la suppression de ce candidat ?')\";>Supprimer</a></td>
                    </tr>
                {% endfor %}
                </tbody>
            </table>
        </div>
    </div>


{% endblock %}", "MALrmBundle:Candidat:index.html.twig", "C:\\wamp64\\www\\ligne_rh\\src\\MA\\LrmBundle\\Resources\\views\\Candidat\\index.html.twig");
    }
}
